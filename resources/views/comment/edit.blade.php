@extends('layouts.app')
@section('title','博客')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-pencil fa-fw"></i>编辑评论
                    </div>
                    <div class="card-body">
                        <form method="post"
                              action="{{ route('comment.update',[$comment->id,'redirect'=>request('redirect')]) }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="put">
                            <div class="form-group">
                                <label for="comment-content">评论内容<span class="required">*</span></label>
                                <textarea placeholder="支持Markdown" style="resize: vertical" id="comment-content"
                                          required
                                          name="content"
                                          rows="5" spellcheck="false"
                                          class="form-control markdown-content autosize-target">{{ $comment->content }}</textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary"
                                       value="修改"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
