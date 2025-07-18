@extends('layouts.app')
@section('content')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview ">
                    
                    <livewire:shop.add />
                    
                    
                    <livewire:shop.index />
                    
                    {{--<div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="title nk-block-title">Form Outlined</h4>
                                <div class="nk-block-des">
                                    <p>Textual form controls—like <code class="code-tag">&lt;input&gt;</code>s, <code class="code-tag">&lt;select&gt;</code>s, and <code class="code-tag">&lt;textarea&gt;</code>s—are styled with the <code>.form-control</code> class. Included are styles for general appearance, focus state, sizing, and more. Additional classes can be used to vary this layout on a per-form basis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-preview">
                            <div class="card-inner">
                                <div class="preview-block">
                                    <span class="preview-title-lg overline-title">Outlined Preview</span>
                                    <div class="row gy-4">
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control form-control-xl form-control-outlined" id="outlined-normal">
                                                    <label class="form-label-outlined" for="outlined-normal">Input text outlined</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <div class="form-icon form-icon-right xl">
                                                        <em class="icon ni ni-user"></em>
                                                    </div>
                                                    <input type="text" class="form-control form-control-xl form-control-outlined" id="outlined-right-icon">
                                                    <label class="form-label-outlined" for="outlined-right-icon">Input with icon</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <select class="form-select form-control" data-ui="xl" id="outlined-select">
                                                        <option value="default_option">Default Option</option>
                                                        <option value="option_select_name">Option select name</option>
                                                        <option value="option_select_name">Option select name</option>
                                                    </select>
                                                    <label class="form-label-outlined" for="outlined-select">Outlined Select</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <div class="form-icon form-icon-right xl">
                                                        <em class="icon ni ni-calendar-alt"></em>
                                                    </div>
                                                    <input type="text" class="form-control form-control-xl form-control-outlined date-picker" id="outlined-date-picker">
                                                    <label class="form-label-outlined" for="outlined-date-picker">Date Picker</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <div class="form-icon form-icon-right xl">
                                                        <em class="icon ni ni-clock"></em>
                                                    </div>
                                                    <input type="text" class="form-control form-control-xl form-control-outlined time-picker" id="outlined-time-picker">
                                                    <label class="form-label-outlined" for="outlined-time-picker">Time Picker</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="preview-hr">
                                    <span class="preview-title-lg overline-title">Outlined Sizes</span>
                                    <div class="row gy-4">
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control form-control-xl form-control-outlined" id="outlined-xl">
                                                    <label class="form-label-outlined" for="outlined-xl">Input text xl</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control form-control-lg form-control-outlined" id="outlined-lg">
                                                    <label class="form-label-outlined" for="outlined-lg">Input text lg</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control form-control-outlined" id="outlined-default">
                                                    <label class="form-label-outlined" for="outlined-default">Input text</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <p class="text-soft">Use <code>.form-control-outlined</code> with <code>.form-control</code> for outlined form element and replace <code>.form-label</code> with <code>.form-label-outlined</code>, also place label after input/select element.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .card-preview -->
                        <div class="code-block">
                            <h6 class="overline-title title">Code Example</h6>
                            <button class="btn btn-sm clipboard-init" title="Copy to clipboard" data-clipboard-target="#formOutlined" data-clip-success="Copied" data-clip-text="Copy"><span class="clipboard-text">Copy</span></button>

                        </div><!-- .code-block -->
                    </div><!-- .nk-block -->
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="title nk-block-title">Select with Select2</h4>
                                <div class="nk-block-des">
                                    <p>Using <code>.form-select</code> class in <code class="code-tag">&lt;select&gt;</code> element to replace browser default style with <a href="https://select2.org/" target="_blank">Select2</a>, as its give you a customizable select box with support for searching, tagging, and many other highly used options. For the documentation for Select2, that can be found <a href="https://select2.org/" target="_blank">here</a>.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-preview">
                            <div class="card-inner">
                                <div class="row gy-4">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Select2 Default</label>
                                            <div class="form-control-wrap">
                                                <select class="form-select">
                                                    <option value="default_option">Default Option</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Select2 With Search</label>
                                            <div class="form-control-wrap">
                                                <select class="form-select" data-search="on">
                                                    <option value="default_option">Default Option</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Select2 Multiple</label>
                                            <div class="form-control-wrap">
                                                <select class="form-select" multiple="multiple" data-placeholder="Select Multiple options">
                                                    <option value="default_option">Default Option</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                    <option value="option_select_name">Option select name</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <p class="text-soft">For large or small size of Select2, use <code>lg</code>, <code>sm</code> in <code>data-ui=""</code> attribute of <code class="code-tag">&lt;select&gt;</code> element. And you can use <code>on</code> in <code>data-search=""</code> attribute to display search option in select2.</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .card-preview -->
                        <div class="code-block">
                            <h6 class="overline-title title">Code Example</h6>
                            <button class="btn btn-sm clipboard-init" title="Copy to clipboard" data-clipboard-target="#select2Elements" data-clip-success="Copied" data-clip-text="Copy"><span class="clipboard-text">Copy</span></button>

                        </div><!-- .code-block -->
                    </div><!-- .nk-block -->--}}
                </div><!-- .components-preview -->
            </div>
        </div>
    </div>
</div>



@endsection