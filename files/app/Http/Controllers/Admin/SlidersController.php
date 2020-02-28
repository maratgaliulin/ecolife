<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use App\Comment;
use App\Helpers\Image;
use App\Order;
use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

class SlidersController extends Controller
{
    protected $orders_shipped_count;
    protected $comments_view_count;
    protected $comment_view;
    protected $orders_shipped;
    protected $paginate;


    public function __construct()
    {
        $this->orders_shipped_count = Order::where('shipped', false)->count();
        $this->comments_view_count = Comment::where('view', false)->count();
        $this->orders_shipped = Order::where('shipped', false)->latest()->take(5)->get();
        $this->comment_view = Comment::where('view', false)->latest()->take(5)->get();
        $this->paginate = 10;
    }

    public function index()
    {
        $paginate = $this->paginate;
        $sliders = Slider::latest()->paginate($paginate);
        $comments_view_count = $this->comments_view_count;
        $orders_shipped_count = $this->orders_shipped_count;
        $orders_shipped = $this->orders_shipped;
        $comment_view = $this->comment_view;

        return view('admin.sliders.index',
            compact('sliders', 'comments_view_count', 'orders_shipped_count', 'comment_view', 'orders_shipped'));
    }

    public function create()
    {
        $comments_view_count = $this->comments_view_count;
        $orders_shipped_count = $this->orders_shipped_count;

        $orders_shipped = $this->orders_shipped;
        $comment_view = $this->comment_view;

        return view('admin.sliders.create',
            compact('comments_view_count', 'orders_shipped_count', 'comment_view', 'orders_shipped'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'image' => 'required|image',
            'description' => 'required'
        ]);

        if (Slider::where('name', '=', Input::get('name'))->exists())
        {
            return back()->with('danger', 'Такой слайдер уже существует!');
        }

        $image = Image::store('sliders', $request->file('image'));

        Slider::create([
            'name' => $request['name'],
            'image' => $image,
            'description' => $request['description']
        ]);

        return redirect()->route('slider.index')->with('status', 'Успешно добавлен!');
    }


    public function edit(Slider $slider)
    {
        $comments_view_count = $this->comments_view_count;
        $orders_shipped_count = $this->orders_shipped_count;
        $orders_shipped = $this->orders_shipped;
        $comment_view = $this->comment_view;

        return view('admin.sliders.edit',
            compact('slider', 'comments_view_count', 'orders_shipped_count', 'comment_view', 'orders_shipped'));
    }

    public function update(Request $request, Slider $slider)
    {
        $this->validate($request, [
            'name' => 'required',
            'image' => 'image',
            'description' => 'required'
        ]);

        if ($request['image'])
        {
            Storage::delete($slider->image);
            $image = Image::store('sliders', $request->file('image'));
        }

        $slider->name = $request['name'];
        $slider->description = $request['description'];
        if ($request['image'])
        {
            $slider->image = $image;
        }
        $slider->save();

        return redirect()->route('slider.index')->with('status', 'Успешно изменен!');
    }

    public function delete(Slider $slider)
    {
        Storage::delete($slider->image);
        $slider->delete();
        return redirect()->route('slider.index')->with('danger', 'Успешно удален!');
    }
}
