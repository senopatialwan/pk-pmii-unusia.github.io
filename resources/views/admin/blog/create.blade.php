@extends('layouts.admin')
@section('title', 'Add News | Dashboard')

@section('content')



    <!--  SIDEBAR - END -->
    <!-- START CONTENT -->
    <section id="main-content" class=" ">
        <section class="wrapper main-wrapper" style=''>

            <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                <div class="page-title">

                    <div class="pull-left">
                        <h1 class="title">Add a Blog</h1>
                    </div>

                    <div class="pull-right hidden-xs">
                        <ol class="breadcrumb">
                            <li>
                                <a href="admin.html"><i class="fa fa-home"></i>Home</a>
                            </li>
                            <li>
                                <a href="blo-blogs.html">Blogs</a>
                            </li>
                            <li class="active">
                                <strong>Add News</strong>
                            </li>
                        </ol>
                    </div>

                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <section class="box ">
                    <header class="panel_header">
                        <h2 class="title pull-left">Basic Info</h2>
                        <div class="actions panel_actions pull-right">
                            <i class="box_toggle fa fa-chevron-down"></i>
                            <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                            <i class="box_close fa fa-times"></i>
                        </div>
                    </header>
                    <div class="content-body">
                        <div class="row">
                            <form action ="#" method="post">

                                <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12 padding-bottom-30">

                                    <div class="form-group">
                                        <label class="form-label" for="field-1">Blog Title</label>
                                        <span class="desc"></span>
                                        <div class="controls">
                                            <input type="text" value="" class="form-control" id="field-1">
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                    <div class="form-group">
                                        <label class="form-label" for="field-5">Blog Content</label>
                                        <span class="desc"></span>

                                        <textarea class="ckeditor" cols="80" id="editor1" name="editor1" rows="10">
                                                </textarea><br>
                                    </div>

                                    <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12 padding-bottom-30">

                                        <div class="form-group">
                                            <label class="form-label" for="field-5">Created On</label>
                                            <span class="desc">e.g. "04/03/2015"</span>
                                            <div class="controls">
                                                <input type="text" value="" class="form-control datepicker"
                                                    data-format="mm/dd/yyyy" value="">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="form-label" for="field-5">Last Edited</label>
                                            <span class="desc">e.g. "04/03/2015"</span>
                                            <div class="controls">
                                                <input type="text" value="" class="form-control datepicker"
                                                    data-format="mm/dd/yyyy" value="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label" for="field-1">Featured Image</label>
                                            <span class="desc"></span>
                                            <div class="controls">
                                                <input type="file" class="form-control" id="field-5">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="field-5">Blog Tags</label>
                                            <span class="desc"></span>
                                            <select multiple class="form-control">
                                                <option>Graphic</option>
                                                <option>Web Design</option>
                                                <option>Branding</option>
                                                <option>Web</option>
                                                <option>SEO</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="field-5">Blog Categories</label>
                                            <span class="desc"></span>
                                            <select multiple class="form-control">
                                                <option>Photoshop</option>
                                                <option>Logo Design</option>
                                                <option>Branding</option>
                                                <option>Web design</option>
                                                <option>SEO</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="field-5">Blog Status</label>
                                            <span class="desc"></span>
                                            <select class="form-control">
                                                <option></option>
                                                <option>New</option>
                                                <option>Draft</option>
                                                <option>Published</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label" for="field-1">Blog Author</label>
                                            <span class="desc"></span>
                                            <div class="controls">
                                                <input type="text" value="" class="form-control" id="field-1">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="form-label" for="field-6">Blog Excerpt</label>
                                            <span class="desc"></span>
                                            <div class="controls">
                                                <textarea class="form-control autogrow" cols="5" id="field-6"></textarea>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12 padding-bottom-30">
                                        <div class="text-left">
                                            <button type="button" class="btn btn-primary">Save</button>
                                            <button type="button" class="btn">Cancel</button>
                                        </div>
                                    </div>
                            </form>
                        </div>


                    </div>
                </section>
            </div>



        </section>
    </section>
    <!-- END CONTENT -->



    <div class="chatapi-windows ">


    </div>
    </div>
    <!-- General section box modal start -->
    <div class="modal" id="section-settings" tabindex="-1" role="dialog" aria-labelledby="ultraModal-Label"
        aria-hidden="true">
        <div class="modal-dialog animated bounceInDown">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Section Settings</h4>
                </div>
                <div class="modal-body">

                    Body goes here...

                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                    <button class="btn btn-success" type="button">Save changes</button>
                </div>
            </div>
        </div>
    </div>

@endsection
