@extends('layouts.admin')
@section('title', 'Edit News | Dashboard')

@section('content')
    <section id="main-content" class=" ">
        <section class="wrapper main-wrapper" style=''>

            <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                <div class="page-title">

                    <div class="pull-left">
                        <h1 class="title">Edit Blog</h1>
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
                                <strong>Edit Blog</strong>
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
                                            <input type="text" value="Graphic design in web" class="form-control"
                                                id="field-1">
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                    <div class="form-group">
                                        <label class="form-label" for="field-5">Blog Content</label>
                                        <span class="desc"></span>

                                        <textarea class="ckeditor" cols="80" id="editor1" name="editor1" rows="10">
    &lt;h1&gt;&lt;img alt=&quot;Saturn V carrying Apollo 11&quot; class=&quot;right&quot; src=&quot;data/ckeditor-sample.jpg&quot;/&gt; Apollo 11&lt;/h1&gt; &lt;p&gt;&lt;b&gt;Apollo 11&lt;/b&gt; was the spaceflight that landed the first humans, Americans &lt;a href=&quot;http://en.wikipedia.org/wiki/Neil_Armstrong&quot; title=&quot;Neil Armstrong&quot;&gt;Neil Armstrong&lt;/a&gt; and &lt;a href=&quot;http://en.wikipedia.org/wiki/Buzz_Aldrin&quot; title=&quot;Buzz Aldrin&quot;&gt;Buzz Aldrin&lt;/a&gt;, on the Moon on July 20, 1969, at 20:18 UTC. Armstrong became the first to step onto the lunar surface 6 hours later on July 21 at 02:56 UTC.&lt;/p&gt; &lt;p&gt;Armstrong spent about &lt;s&gt;three and a half&lt;/s&gt; two and a half hours outside the spacecraft, Aldrin slightly less; and together they collected 47.5 pounds (21.5&amp;nbsp;kg) of lunar material for return to Earth. A third member of the mission, &lt;a href=&quot;http://en.wikipedia.org/wiki/Michael_Collins_(astronaut)&quot; title=&quot;Michael Collins (astronaut)&quot;&gt;Michael Collins&lt;/a&gt;, piloted the &lt;a href=&quot;http://en.wikipedia.org/wiki/Apollo_Command/Service_Module&quot; title=&quot;Apollo Command/Service Module&quot;&gt;command&lt;/a&gt; spacecraft alone in lunar orbit until Armstrong and Aldrin returned to it for the trip back to Earth.&lt;/p&gt; &lt;h2&gt;Broadcasting and &lt;em&gt;quotes&lt;/em&gt; &lt;a id=&quot;quotes&quot; name=&quot;quotes&quot;&gt;&lt;/a&gt;&lt;/h2&gt; &lt;p&gt;Broadcast on live TV to a world-wide audience, Armstrong stepped onto the lunar surface and described the event as:&lt;/p&gt; &lt;blockquote&gt;&lt;p&gt;One small step for [a] man, one giant leap for mankind.&lt;/p&gt;&lt;/blockquote&gt; &lt;p&gt;Apollo 11 effectively ended the &lt;a href=&quot;http://en.wikipedia.org/wiki/Space_Race&quot; title=&quot;Space Race&quot;&gt;Space Race&lt;/a&gt; and fulfilled a national goal proposed in 1961 by the late U.S. President &lt;a href=&quot;http://en.wikipedia.org/wiki/John_F._Kennedy&quot; title=&quot;John F. Kennedy&quot;&gt;John F. Kennedy&lt;/a&gt; in a speech before the United States Congress:&lt;/p&gt; &lt;blockquote&gt;&lt;p&gt;[...] before this decade is out, of landing a man on the Moon and returning him safely to the Earth.&lt;/p&gt;&lt;/blockquote&gt; &lt;h2&gt;Technical details &lt;a id=&quot;tech-details&quot; name=&quot;tech-details&quot;&gt;&lt;/a&gt;&lt;/h2&gt; &lt;table align=&quot;right&quot; border=&quot;1&quot; bordercolor=&quot;#ccc&quot; cellpadding=&quot;5&quot; cellspacing=&quot;0&quot; style=&quot;border-collapse:collapse;margin:10px 0 10px 15px;&quot;&gt; &lt;caption&gt;&lt;strong&gt;Mission crew&lt;/strong&gt;&lt;/caption&gt; &lt;thead&gt; &lt;tr&gt; &lt;th scope=&quot;col&quot;&gt;Position&lt;/th&gt; &lt;th scope=&quot;col&quot;&gt;Astronaut&lt;/th&gt; &lt;/tr&gt; &lt;/thead&gt; &lt;tbody&gt; &lt;tr&gt; &lt;td&gt;Commander&lt;/td&gt; &lt;td&gt;Neil A. Armstrong&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;Command Module Pilot&lt;/td&gt; &lt;td&gt;Michael Collins&lt;/td&gt; &lt;/tr&gt; &lt;tr&gt; &lt;td&gt;Lunar Module Pilot&lt;/td&gt; &lt;td&gt;Edwin &amp;quot;Buzz&amp;quot; E. Aldrin, Jr.&lt;/td&gt; &lt;/tr&gt; &lt;/tbody&gt; &lt;/table&gt; &lt;p&gt;Launched by a &lt;strong&gt;Saturn V&lt;/strong&gt; rocket from &lt;a href=&quot;http://en.wikipedia.org/wiki/Kennedy_Space_Center&quot; title=&quot;Kennedy Space Center&quot;&gt;Kennedy Space Center&lt;/a&gt; in Merritt Island, Florida on July 16, Apollo 11 was the fifth manned mission of &lt;a href=&quot;http://en.wikipedia.org/wiki/NASA&quot; title=&quot;NASA&quot;&gt;NASA&lt;/a&gt;&amp;#39;s Apollo program. The Apollo spacecraft had three parts:&lt;/p&gt; &lt;ol&gt; &lt;li&gt;&lt;strong&gt;Command Module&lt;/strong&gt; with a cabin for the three astronauts which was the only part which landed back on Earth&lt;/li&gt; &lt;li&gt;&lt;strong&gt;Service Module&lt;/strong&gt; which supported the Command Module with propulsion, electrical power, oxygen and water&lt;/li&gt; &lt;li&gt;&lt;strong&gt;Lunar Module&lt;/strong&gt; for landing on the Moon.&lt;/li&gt; &lt;/ol&gt; &lt;p&gt;After being sent to the Moon by the Saturn V&amp;#39;s upper stage, the astronauts separated the spacecraft from it and travelled for three days until they entered into lunar orbit. Armstrong and Aldrin then moved into the Lunar Module and landed in the &lt;a href=&quot;http://en.wikipedia.org/wiki/Mare_Tranquillitatis&quot; title=&quot;Mare Tranquillitatis&quot;&gt;Sea of Tranquility&lt;/a&gt;. They stayed a total of about 21 and a half hours on the lunar surface. After lifting off in the upper part of the Lunar Module and rejoining Collins in the Command Module, they returned to Earth and landed in the &lt;a href=&quot;http://en.wikipedia.org/wiki/Pacific_Ocean&quot; title=&quot;Pacific Ocean&quot;&gt;Pacific Ocean&lt;/a&gt; on July 24.&lt;/p&gt; &lt;hr/&gt; &lt;p style=&quot;text-align: right;&quot;&gt;&lt;small&gt;Source: &lt;a href=&quot;http://en.wikipedia.org/wiki/Apollo_11&quot;&gt;Wikipedia.org&lt;/a&gt;&lt;/small&gt;&lt;/p&gt;
                                    </textarea><br>
                                    </div>

                                    <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12 padding-bottom-30">

                                        <div class="form-group">
                                            <label class="form-label" for="field-5">Created On</label>
                                            <span class="desc">e.g. "04/03/2015"</span>
                                            <div class="controls">
                                                <input type="text" value="05/04/2015" class="form-control datepicker"
                                                    data-format="mm/dd/yyyy" value="">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="form-label" for="field-5">Last Edited</label>
                                            <span class="desc">e.g. "04/03/2015"</span>
                                            <div class="controls">
                                                <input type="text" value="07/05/2015" class="form-control datepicker"
                                                    data-format="mm/dd/yyyy" value="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label" for="field-1">Featured Image</label>
                                            <span class="desc"></span>
                                            <img class="img-responsive" src="data/blogs/blog-1.jpg" alt=""
                                                style="max-width:120px;">
                                            <div class="controls">
                                                <input type="file" class="form-control" id="field-5">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="field-5">Blog Tags</label>
                                            <span class="desc"></span>
                                            <select multiple class="form-control">
                                                <option selected='selected'>Graphic</option>
                                                <option selected='selected'>Web Design</option>
                                                <option selected='selected'>Branding</option>
                                                <option>Web</option>
                                                <option>SEO</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="field-5">Blog Categories</label>
                                            <span class="desc"></span>
                                            <select multiple class="form-control">
                                                <option selected='selected'>Photoshop</option>
                                                <option selected='selected'>Logo Design</option>
                                                <option selected='selected'>Branding</option>
                                                <option>Web design</option>
                                                <option>SEO</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="field-5">Blog Status</label>
                                            <span class="desc"></span>
                                            <select class="form-control">
                                                <option></option>
                                                <option selected='selected'>New</option>
                                                <option>Draft</option>
                                                <option>Published</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label" for="field-1">Blog Author</label>
                                            <span class="desc"></span>
                                            <div class="controls">
                                                <input type="text" value="John Doe" class="form-control"
                                                    id="field-1">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="form-label" for="field-6">Blog Excerpt</label>
                                            <span class="desc"></span>
                                            <div class="controls">
                                                <textarea class="form-control autogrow" cols="5" id="field-6">The field is considered a subset of visual communication and communication design, but sometimes the term graphic design is used interchangeably with these due to overlapping skills involved. Graphic designers use various methods to create and combine words, symbols, and images to create a visual representation of ideas and messages. </textarea>
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
@endsection
