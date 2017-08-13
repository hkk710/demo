<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use App\Vtype;
use App\User;
use App\Prathishta;
use App\Vname;
use App\Admin;
use App\Income;
use App\Expenses;
use App\News;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }


    // ============================== Users ===================

    public function userIndex(Request $request) {
        $users = User::all();
        $admins = Admin::all();
        return view('admin.user.index')->withUsers($users)->withAdmins($admins);
    }

    public function userCreate() {
        return view('admin.user.create');
    }

    public function userStore(Request $request) {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        Session::flash('success', 'User have been successfully added');
        return redirect()->route('user.show', [$user->id]);
    }

    public function userShow($id) {
        $user = User::find($id);
        if ($user == null) {
            abort(404);
        }
        return view('admin.user.show')->withUser($user);
    }

    public function userEdit($id) {
        $user = User::find($id);
        if ($user == null) {
            abort(404);
        }
        return view('admin.user.edit')->withUser($user);
    }

    public function userUpdate(Request $request, $id) {
        $this->validate($request, [
            'name'     => 'required|max:255',
            'email'    => "required|unique:users,email,$id",
            'password' => 'sometimes|max:255|confirmed'
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password != null || $request->password != "") {
            $user->password = bcrypt($request->password);
        }
        $user->save();

        Session::flash('success', 'User have been successfully edited');
        return redirect()->route('user.show', [$user->id]);
    }

    public function userDelete($id) {
        $user = User::find($id);
        if ($user == null) {
            abort(404);
        }
        return view('admin.user.delete')->withUser($user);
    }

    public function userDestroy($id) {
        $user = User::find($id);
        $user->delete();

        Session::flash('success', 'The user was successfully deleted');
        return redirect('/admin/users');
    }




    // ======================= Vazhipad types ===================

    public function vtypeIndex(Request $request) {
        $vtypes = Vtype::all();
        return view('admin.vtype.index')->withVtypes($vtypes);
    }

    public function vtypeCreate() {
        return view('admin.vtype.create');
    }

    public function vtypeStore(Request $request) {
        $this->validate($request, ['name' => 'required']);
        $vtype = new Vtype;
        $vtype->name = $request->name;

        $vtype->save();
        Session::flash('success', 'New Vazhipad Type was successfully created');
        return redirect()->route('vtype.show', [$vtype->id]);
    }

    public function vtypeShow($id) {
        $vtype = Vtype::find($id);
        if ($vtype == null) {
            abort(404);
        }
        return view('admin.vtype.show')->withVtype($vtype);
    }

    public function vtypeEdit($id) {
        $vtype = Vtype::find($id);
        if ($vtype == null) {
            abort(404);
        }
        return view('admin.vtype.edit')->withVtype($vtype);
    }

    public function vtypeUpdate(Request $request, $id) {
        $this->validate($request, [
            'name'     => 'required|max:255'
        ]);

        $vtype = Vtype::find($id);
        $vtype->name = $request->name;
        $vtype->save();

        Session::flash('success', 'Vazhipad type was successfully edited');
        return redirect()->route('vtype.show', [$vtype->id]);
    }

    public function vtypeDelete($id) {
        $vtype = Vtype::find($id);
        if ($vtype == null) {
            abort(404);
        }
        return view('admin.vtype.delete')->withVtype($vtype);
    }

    public function vtypeDestroy($id) {
        $vtype = Vtype::find($id);
        $vtype->vname()->delete();
        $vtype->delete();

        Session::flash('success', 'Vazhipad type was successfully deleted');
        return redirect('/admin/vtypes');
    }




        // ======================= Vazhipad names ===================

        public function vnameIndex(Request $request) {
            $vnames = Vname::all();
            return view('admin.vname.index')->withVnames($vnames);
        }

        public function vnameCreate() {
            $vtypes = Vtype::all();
            $prathishtas = Prathishta::all();
            return view('admin.vname.create')->withVtypes($vtypes)->withPrathishtas($prathishtas);
        }

        public function vnameStore(Request $request) {
            $this->validate($request, ['name' => 'required', 'price'    => 'required|numeric']);
            $vname = new Vname;
            $vname->name = $request->name;
            $vname->vtypes_id = $request->vtypes_id;
            $vname->prathishtas_id = $request->prathishtas_id;
            $vname->price = $request->price;

            $vname->save();
            Session::flash('success', 'New Vazhipad name was successfully created');
            return redirect()->route('vname.show', [$vname->id]);
        }

        public function vnameShow($id) {
            $vname = Vname::find($id);
            if ($vname == null) {
                abort(404);
            }
            return view('admin.vname.show')->withVname($vname);
        }

        public function vnameEdit($id) {
            $prathishtas = Prathishta::all();
            $vname = Vname::find($id);
            if ($vname == null) {
                abort(404);
            }
            $vtypes = Vtype::all();
            return view('admin.vname.edit')->withVname($vname)->withVtypes($vtypes)->withPrathishtas($prathishtas);
        }

        public function vnameUpdate(Request $request, $id) {
            $this->validate($request, [
                'name'     => 'required|max:255',
                'price'    => 'required|numeric'
            ]);

            $vname = Vname::find($id);
            $vname->name = $request->name;
            $vname->vtypes_id = $request->vtypes_id;
            $vname->prathishtas_id = $request->prathishtas_id;
            $vname->price = $request->price;
            $vname->save();

            Session::flash('success', 'Vazhipad name was successfully edited');
            return redirect()->route('vname.show', [$vname->id]);
        }

        public function vnameDelete($id) {
            $vname = Vname::find($id);
            if ($vname == null) {
                abort(404);
            }
            return view('admin.vname.delete')->withVname($vname);
        }

        public function vnameDestroy($id) {
            $vname = Vname::find($id);
            $vname->delete();

            Session::flash('success', 'Vazhipad name was successfully deleted');
            return redirect('/admin/vnames');
        }

        // ======================= Incomes ===================

        public function incomesIndex(Request $request) {
            $incomes = Income::all();
            return view('admin.Daily_Account.income.index')->withIncomes($incomes);
        }

        public function incomesCreate() {
            return view('admin.Daily_Account.income.create_income');
        }

        public function incomesStore(Request $request) {
            $this->validate($request, [
                'type'   => 'required',
                'amount' => 'required',
                'date' => 'required'
            ]);
            $incomes = new Income;
            $incomes->type = $request->type;
            $incomes->date = $request->date;
            $incomes->amount = $request->amount;

            $incomes->save();
            Session::flash('success', 'New income was successfully added');
            return redirect()->route('income.show', [$incomes->id]);
        }

        public function incomesShow($id) {
            $incomes = Income::find($id);
            if ($incomes == null) {
                abort(404);
            }
            return view('admin.Daily_Account.income.show')->withIncomes($incomes);
        }

        public function incomesEdit($id) {
            $incomes = Income::find($id);
            if ($incomes == null) {
                abort(404);
            }
            return view('admin.Daily_Account.income.edit')->withIncomes($incomes);
        }

        public function incomesUpdate(Request $request, $id) {
            $this->validate($request, [
                'type'   => 'required',
                'amount' => 'required'
            ]);

            $incomes = Income::find($id);
            $incomes->type = $request->type;
            $incomes->amount = $request->amount;
            $incomes->save();

            Session::flash('success', 'Income details was successfully edited');
            return redirect()->route('income.show', [$incomes->id]);
        }

        public function incomesDelete($id) {
            $incomes = Income::find($id);
            if ($incomes == null) {
                abort(404);
            }
            return view('admin.Daily_Account.income.delete')->withIncomes($incomes);
        }

        public function incomesDestroy($id) {
            $incomes = Income::find($id);
            $incomes->delete();

            Session::flash('success', 'Income details was successfully deleted');
            return redirect('/admin/incomes');
        }
        // ======================= Expenses ===================

        public function expensesIndex(Request $request) {
            $expenses = Expenses::all();
            return view('admin.Daily_Account.expenses.index')->withExpenses($expenses);
        }

        public function expensesCreate() {
            return view('admin.Daily_Account.expenses.create_expenses');
        }

        public function expensesStore(Request $request) {
            $this->validate($request, [
                'head'   => 'required',
                'amount' => 'required',
                'discription' => 'required',

            ]);
            $expenses = new Expenses;
            $expenses->head = $request->head;
            $expenses->amount = $request->amount;
            $expenses->discription = $request->discription;

            $expenses->save();
            Session::flash('success', 'New expense was successfully added');
            return redirect()->route('expenses.show', [$expenses->id]);
        }

        public function expensesShow($id) {
            $expenses = Expenses::find($id);
            if ($expenses == null) {
                abort(404);
            }
            return view('admin.Daily_Account.expenses.show')->withExpenses($expenses);
        }

        public function expensesEdit($id) {
            $expenses = Expenses::find($id);
            if ($expenses == null) {
                abort(404);
            }
            return view('admin.Daily_Account.expenses.edit')->withExpenses($expenses);
        }

        public function expensesUpdate(Request $request, $id) {
            $this->validate($request, [
                'head'   => 'required',
                'amount' => 'required',
                'discription' => 'required',
            ]);

            $expenses = Expenses::find($id);
            $expenses->head = $request->head;
            $expenses->amount = $request->amount;
            $expenses->discription = $request->discription;
            $expenses->save();

            Session::flash('success', 'Expenses details was successfully edited');
            return redirect()->route('expenses.show', [$expenses->id]);
        }

        public function expensesDelete($id) {
            $expenses = Expenses::find($id);
            if ($expenses == null) {
                abort(404);
            }
            return view('admin.Daily_Account.expenses.delete')->withExpenses($expenses);
        }

        public function expensesDestroy($id) {
            $expenses = Expenses::find($id);
            $expenses->delete();

            Session::flash('success', 'Expenses details was successfully deleted');
            return redirect('/admin/expenses');
        }

        // ======================= Cash Book ======================

        public function cashbookIndex(Request $request) {
            $expenses = Expenses::all();
            $incomes = Income::all();

            return view('admin.Daily_Account.cashbooks.index')->withExpenses($expenses)->withIncomes($incomes);

        }

        public function cashbookCheck(Request $request) {
            $income = Income::all()->where('date', '>=', $request->fromDate)->where('date', '<=', $request->toDate);
            $expenses = Expenses::all()->where('date', '>=', $request->fromDate)->where('date', '<=', $request->toDate);
            return [
                'income' => $income,
                'incomesum' => $income->sum('amount'),
                'expense' => $expenses,
                'expensesum' => $expenses->sum('amount')
            ];
        }

        // =================== news ============================
        public function newsIndex(Request $request) {
            $news = News::all();
            return view('admin.news.index')->withNews($news);
        }

        public function newsCreate() {
            return view('admin.news.create');
        }

        public function newsStore(Request $request) {
            $this->validate($request, [
                'date'   => 'required',
                'title' => 'required'

            ]);
            $news = new News;
            $news->date = $request->date;
            $news->title = $request->title;

            $news->save();
            Session::flash('success', 'New News was successfully added');
            return redirect()->route('news.show', [$news->id]);
        }

        public function newsShow($id) {
            $news = News::find($id);
            if ($news == null) {
                abort(404);
            }
            return view('admin.news.show')->withNews($news);
        }

        public function newsEdit($id) {
            $news = News::find($id);
            if ($news == null) {
                abort(404);
            }
            return view('admin.news.edit')->withNews($news);
        }

        public function newsUpdate(Request $request, $id) {
            $this->validate($request, [
                'date'   => 'required',
                'title' => 'required'
            ]);

            $news = News::find($id);
            $news->date = $request->date;
            $news->title = $request->title;
            $news->save();

            Session::flash('success', 'News details was successfully edited');
            return redirect()->route('news.show', [$news->id]);
        }

        public function newsDelete($id) {
            $news = News::find($id);
            if ($news == null) {
                abort(404);
            }
            return view('admin.news.delete')->withNews($news);
        }

        public function newsDestroy($id) {
            $news = News::find($id);
            $news->delete();

            Session::flash('success', 'News details was successfully deleted');
            return redirect('/admin/news');
        }

}
