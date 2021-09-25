<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedBackRequest;
use App\Models\FeedBack;
use Illuminate\Http\Request;

class FeedBackController extends Controller
{
    public function store(FeedBackRequest $request) {
        $fback = new FeedBack();
        $fback->fill($request->validated());
        $fback->save();
        return redirect()->route('contact')->with('success', 'Your message has been sent. Thank you!');
    }
    public function list(Request $request)
    {
        $queryBuilder = FeedBack::query();
        $search = $request->get('search');
        $sort = $request->get('sort');
        $subject = $request->get('subject');
        if ($search || strlen($search) > 0) {
            $queryBuilder = $queryBuilder->where('name', 'like', '%' . $search . '%')
            ->orWhere('email', 'like', '%' . $search . '%')
                ->orWhere('message', 'like', '%' . $search . '%');
        }
        if ($sort === 1) {
            $queryBuilder = $queryBuilder->orderBy('created_at', 'DESC');
        }
        if ($sort === 2) {
            $queryBuilder = $queryBuilder->orderBy('created_at', 'ASC');
        }
        if ($subject){
            $queryBuilder = $queryBuilder->where('subject',$subject);
        }
        $data = $queryBuilder->paginate(5)->appends(['search' => $search]);
        return view('admin.feedback.table', [
            'fback' => $data,
            'sort' => $sort,
            'subject' => $subject
        ]);
    }
    public function detail($id) {
        $detail = FeedBack::find($id);
        return view('admin.feedback.detail', ['details'=>$detail]);
    }
    public function delete($id)
    {
        $delete = FeedBack::find($id);
        $delete->delete();
        return redirect()->route('listFeedBack')
            ->with('success', 'Xoá phản hồi thành công.');
    }
}
