@extends('layouts.master')

@section('top_widgets')
  @include('layouts.widgets.slider_main')
@endsection

@section('content')
  <form method="POST" action="/posts">
    {{csrf_field()}}

    <div class="form-group row">
      <label for="title" class="col-sm-2 col-form-label">Title</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="title" name="title" placeholder="Title">
      </div>
    </div>
    <div class="form-group row">
      <label for="url" class="col-sm-2 col-form-label">URL</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="url" name="url" placeholder="url">
      </div>
    </div>
    <div class="form-group row">
      <label for="content" class="col-sm-2 col-form-label">Content</label>
      <div class="col-sm-10">
        <textarea class="form-control" id="content" name="content" placeholder="content" rows="10"></textarea>
      </div>
    </div>
    <div class="form-group row">
      <label for="intro" class="col-sm-2 col-form-label">Intro</label>
      <div class="col-sm-10">
        <textarea class="form-control" id="intro" name="intro" placeholder="intro" rows="3"></textarea>
      </div>
    </div>
    <fieldset class="form-group">
      <div class="row">
        <legend class="col-form-label col-sm-2 pt-0">Active</legend>
        <div class="col-sm-10">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="active" id="active1" value="1" checked>
            <label class="form-check-label" for="active1">
              1
            </label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="active" id="active0" value="0">
            <label class="form-check-label" for="active0">
              0
            </label>
          </div>
        </div>
      </div>
    </fieldset>

    <div class="form-group row">
      <label class="col-sm-2 col-form-label" for="category_id">Category</label>
      <div class="col-sm-10">
        <select class="form-control" id="category_id" name="category_id">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="tags_list" class="col-sm-2 col-form-label">Tag list</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="tags_list" name="tags_list" placeholder="tags_list">
      </div>
    </div>

    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Publish</button>
      </div>
    </div>
  </form>
  <div><a href="/posts">Back</a></div>
@endsection