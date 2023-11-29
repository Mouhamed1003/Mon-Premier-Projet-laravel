<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Gestion d'administration</title>
<link rel="stylesheet" href="{{mix("css/app.css")}}"/>

@livewireStyles
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<nav class="main-header navbar navbar-expand navbar-dark navbar-light">

<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
</li>
<li class="nav-item d-none d-sm-inline-block">
<a href="../../index3.html" class="nav-link">Home</a>
</li>
<li class="nav-item d-none d-sm-inline-block">
<a href="#" class="nav-link">Contact</a>
</li>
</ul>
<ul class="navbar-nav ml-auto">

<li class="nav-item">
<a class="nav-link" data-widget="navbar-search" href="#" role="button">
<i class="fas fa-search"></i>
</a>
<div class="navbar-search-block">
<form class="form-inline">
<div class="input-group input-group-sm">
<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
<div class="input-group-append">
<button class="btn btn-navbar" type="submit">
<i class="fas fa-search"></i>
</button>
<button class="btn btn-navbar" type="button" data-widget="navbar-search">
<i class="fas fa-times"></i>
</button>
</div>
</div>
</form>
</div>
</li>

<li class="nav-item dropdown">
<a class="nav-link" data-toggle="dropdown" href="#">
<i class="far fa-comments"></i>
<span class="badge badge-danger navbar-badge">3</span>
</a>
<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
<a href="#" class="dropdown-item">

<div class="media">
<img src="{{asset('image/dioufphtoPRO.jpeg')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
<div class="media-body">
<h3 class="dropdown-item-title">
Brad Diesel
<span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
</h3>
<p class="text-sm">Call me whenever you can...</p>
<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
</div>
</div>

</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item">

<div class="media">
<img src="{{asset('image/dioufphtoPRO.jpeg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
<div class="media-body">
<h3 class="dropdown-item-title">
John Pierce
<span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
</h3>
<p class="text-sm">I got your message bro</p>
<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
</div>
</div>

</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item">

<div class="media">
<img src="{{asset('image/dioufphtoPRO.jpeg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
<div class="media-body">
<h3 class="dropdown-item-title">
Nora Silvester
<span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
</h3>
<p class="text-sm">The subject goes here</p>
<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
</div>
</div>

</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
</div>
</li>

<li class="nav-item dropdown">
<a class="nav-link" data-toggle="dropdown" href="#">
<i class="far fa-bell"></i>
<span class="badge badge-warning navbar-badge">15</span>
</a>
<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
<span class="dropdown-item dropdown-header">15 Notifications</span>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item">
<i class="fas fa-envelope mr-2"></i> 4 new messages
<span class="float-right text-muted text-sm">3 mins</span>
</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item">
<i class="fas fa-users mr-2"></i> 8 friend requests
<span class="float-right text-muted text-sm">12 hours</span>
</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item">
<i class="fas fa-file mr-2"></i> 3 new reports
<span class="float-right text-muted text-sm">2 days</span>
</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
</div>
</li>
<li class="nav-item">
<a class="nav-link" data-widget="fullscreen" href="#" role="button">
<i class="fas fa-expand-arrows-alt"></i>
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
<i class="fas fa-th-large"></i>
</a>
</li>
</ul>
</nav>


<aside class="main-sidebar sidebar-dark-success elevation-4">

<a href="../../index3.html" class="brand-link">
<img src="{{asset('image/drpo0maroc-logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"><span class="brand-text font-weight-bold">Royaume du Maroc</span>
</a>

<div class="sidebar">

<div class="user-panel mt-3 pb-3 mb-3 d-flex">
<div class="image">
<img src="{{asset('image/dioufphtoPRO.jpeg')}}" class="img-circle elevation-2" alt="User Image">
</div>
<div class="info">
<a href="#" class="d-block">Mohamadou DIOUF</a>
</div>
</div>

<div class="form-inline">
<div class="input-group" data-widget="sidebar-search">
<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
<div class="input-group-append">
<button class="btn btn-sidebar">
<i class="fas fa-search fa-fw"></i>
</button>
</div>
</div>
</div>

<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

<li class="nav-item">

<ul class="nav nav-treeview">
<li class="nav-item">
<a href="../UI/general.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>General</p>
</a>
</li>
<li class="nav-item">
<a href="../UI/icons.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Icons</p>
</a>
</li>
<li class="nav-item">
<a href="../UI/buttons.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Buttons</p>
</a>
</li>
<li class="nav-item">
<a href="../UI/sliders.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Sliders</p>
</a>
</li>
<li class="nav-item">
<a href="../UI/modals.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Modals & Alerts</p>
</a>
</li>
<li class="nav-item">
<a href="../UI/navbar.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Navbar & Tabs</p>
</a>
</li>
<li class="nav-item">
<a href="../UI/timeline.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Timeline</p>
</a>
</li>
<li class="nav-item">
<a href="../UI/ribbons.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Ribbons</p>
</a>
</li>
</ul>
</li>
<li class="nav-item menu-open">
<a href="#" class="nav-link active">
<i class="nav-icon fas fa-edit"></i>
<p>
Forms
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="../forms/general.html" class="nav-link active">
<i class="far fa-circle nav-icon"></i>
<p>General Elements</p>
</a>
</li>

</ul>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-table"></i>
<p>
Tables
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="../tables/simple.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Simple Tables</p>
</a>
</li>
<li class="nav-item">
<a href="../tables/data.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>DataTables</p>
</a>
</li>
<li class="nav-item">
<a href="../tables/jsgrid.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>jsGrid</p>
</a>
</li>
</ul>
</li>
<li class="nav-header">EXAMPLES</li>
<li class="nav-item">
<a href="../calendar.html" class="nav-link">
<i class="nav-icon far fa-calendar-alt"></i>
<p>
Calendar
<span class="badge badge-info right">2</span>
</p>
</a>
</li>
<li class="nav-item">
<a href="../gallery.html" class="nav-link">
<i class="nav-icon far fa-image"></i>
<p>
Gallery
</p>
</a>
</li>
<li class="nav-item">
<a href="../kanban.html" class="nav-link">
<i class="nav-icon fas fa-columns"></i>
<p>
Kanban Board
</p>
</a>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon far fa-envelope"></i>
<p>
Mailbox
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="../mailbox/mailbox.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Inbox</p>
</a>
</li>
<li class="nav-item">
<a href="../mailbox/compose.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Compose</p>
</a>
</li>
<li class="nav-item">
<a href="../mailbox/read-mail.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Read</p>
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-book"></i>
<p>
Pages
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="../examples/invoice.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Invoice</p>
</a>
</li>
<li class="nav-item">
<a href="../examples/profile.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Profile</p>
</a>


</ul>
</li>
<li class="nav-item">

<ul class="nav nav-treeview">
<li class="nav-item">
<a href="#" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>
Login & Register v1
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="../examples/login.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Login v1</p>
</a>
</li>
<li class="nav-item">
<a href="../examples/register.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Register v1</p>
</a>
</li>
<li class="nav-item">
<a href="../examples/forgot-password.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Forgot Password v1</p>
</a>
</li>
<li class="nav-item">
<a href="../examples/recover-password.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Recover Password v1</p>
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>
Login & Register v2
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="../examples/login-v2.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Login v2</p>
</a>
</li>
<li class="nav-item">
<a href="../examples/register-v2.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Register v2</p>
</a>
</li>
<li class="nav-item">
<a href="../examples/forgot-password-v2.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Forgot Password v2</p>
</a>
</li>
<li class="nav-item">
<a href="../examples/recover-password-v2.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Recover Password v2</p>
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="../examples/lockscreen.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Lockscreen</p>
</a>
</li>
<li class="nav-item">
<a href="../examples/legacy-user-menu.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Legacy User Menu</p>
</a>
</li>
<li class="nav-item">
<a href="../examples/language-menu.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Language Menu</p>
</a>
</li>
<li class="nav-item">
<a href="../examples/404.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Error 404</p>
</a>
</li>
<li class="nav-item">
<a href="../examples/500.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Error 500</p>
</a>
</li>
<li class="nav-item">
<a href="../examples/pace.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Pace</p>
</a>
</li>
<li class="nav-item">
<a href="../examples/blank.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Blank Page</p>
</a>
</li>
<li class="nav-item">
<a href="../../starter.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Starter Page</p>
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-search"></i>
<p>
Search
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
</ul>
</li>

<li class="nav-item">
<a href="https://adminlte.io/docs/3.1/" class="nav-link">
<i class="nav-icon fas fa-file"></i>
<p>Documentation</p>
</a>
</li>

<li class="nav-header">LABELS</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon far fa-circle text-danger"></i>
<p class="text">Important</p>
</a>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon far fa-circle text-warning"></i>
<p>Warning</p>
</a>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon far fa-circle text-info"></i>
<p>Informational</p>
</a>
</li>
</ul>
</nav>

</div>

</aside>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1>Ministre de L'Administration Territoriale</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="#">Le Ministre</a></li>
<li class="breadcrumb-item active">Autorité Administrative</li>
</ol>
</div>
</div>
</div>
</section>

<section class="content">
<div class="container-fluid">
<div class="row">

<div class="col-md-6">

<div class="card card-dark">
<div class="card-header">
<h3 class="card-title">Ouverture de Compte Admin</h3>
</div>


<form>
<div class="card-body">
<div class="form-group">
<label for="exampleInputEmail1">Email address</label>
<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
</div>
<div class="form-group">
<label for="exampleInputPassword1">Password</label>
<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
</div>
<div class="form-group">
<label for="exampleInputFile">File input</label>
<div class="input-group">
<div class="custom-file">
<input type="file" class="custom-file-input" id="exampleInputFile">
<label class="custom-file-label" for="exampleInputFile">Choose file</label>
</div>
<div class="input-group-append">
<span class="input-group-text">Upload</span>
</div>
</div>
</div>
<div class="form-check">
<input type="checkbox" class="form-check-input" id="exampleCheck1">
<label class="form-check-label" for="exampleCheck1">Check me out</label>
</div>
</div>

<div class="card-footer">
<button type="submit" class="btn btn-dark">Submit</button>
</div>
</form>
</div>




<div class="card card-dark">
<div class="card-header">
<h3 class="card-title">Champs de Connexion</h3>
</div>


<form class="form-horizontal">
<div class="card-body">
<div class="form-group row">
<label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
<div class="col-sm-10">
<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
</div>
</div>
<div class="form-group row">
<label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
<div class="col-sm-10">
<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
</div>
</div>
<div class="form-group row">
<div class="offset-sm-2 col-sm-10">
<div class="form-check">
<input type="checkbox" class="form-check-input" id="exampleCheck2">
<label class="form-check-label" for="exampleCheck2">Remember me</label>
</div>
</div>
</div>
</div>

<div class="card-footer">
<button type="submit" class="btn btn-dark">Sign in</button>
<button type="submit" class="btn btn-default float-right">Cancel</button>
</div>

</form>
</div>

</div>


<div class="col-md-6">

<div class="card card-dark">
<div class="card-header">
<h3 class="card-title">General Elements</h3>
</div>

<div class="card-body">
<form>
<div class="row">
<div class="col-sm-6">

<div class="form-group">
<label>Text</label>
<input type="text" class="form-control" placeholder="Enter ...">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label>Text Disabled</label>
<input type="text" class="form-control" placeholder="Enter ..." disabled>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-6">

<div class="form-group">
<label>Textarea</label>
<textarea class="form-control" rows="2" placeholder="Enter ..."></textarea>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label>Textarea Disabled</label>
<textarea class="form-control" rows="2" placeholder="Enter ..." disabled></textarea>
</div>
</div>
</div>

<div class="form-group">
<label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Input with
success</label>
<input type="text" class="form-control is-valid" id="inputSuccess" placeholder="Enter ...">
</div>
<div class="form-group">
<label class="col-form-label" for="inputWarning"><i class="far fa-bell"></i> Input with
warning</label>
<input type="text" class="form-control is-warning" id="inputWarning" placeholder="Enter ...">
</div>
<div class="form-group">
<label class="col-form-label" for="inputError"><i class="far fa-times-circle"></i> Input with
error</label>
<input type="text" class="form-control is-invalid" id="inputError" placeholder="Enter ...">
</div>
<div class="row">
<div class="col-sm-6">

<div class="form-group">
<div class="form-check">
<input class="form-check-input" type="checkbox">
<label class="form-check-label">Checkbox</label>
</div>
<div class="form-check">
<input class="form-check-input" type="checkbox" checked>
<label class="form-check-label">Checkbox checked</label>
</div>
<div class="form-check">
<input class="form-check-input" type="checkbox" disabled>
<label class="form-check-label">Checkbox disabled</label>
</div>
</div>
</div>
<div class="col-sm-6">

<div class="form-group">
<div class="form-check">
<input class="form-check-input" type="radio" name="radio1">
<label class="form-check-label">Radio</label>
</div>
<div class="form-check">
<input class="form-check-input" type="radio" name="radio1" checked>
<label class="form-check-label">Radio checked</label>
</div>
<div class="form-check">
<input class="form-check-input" type="radio" disabled>
<label class="form-check-label">Radio disabled</label>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-6">

<div class="form-group">
<label>Select</label>
<select class="form-control">
<option>option 1</option>
<option>option 2</option>
<option>option 3</option>
<option>option 4</option>
<option>option 5</option>
</select>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label>Select Disabled</label>
<select class="form-control" disabled>
<option>option 1</option>
<option>option 2</option>
<option>option 3</option>
<option>option 4</option>
<option>option 5</option>
</select>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-6">

<div class="form-group">
<label>Select Multiple</label>
<select multiple class="form-control">
<option>option 1</option>
<option>option 2</option>
<option>option 3</option>
<option>option 4</option>
<option>option 5</option>
</select>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label>Select Multiple Disabled</label>
<select multiple class="form-control" disabled>
<option>option 1</option>
<option>option 2</option>
<option>option 3</option>
<option>option 4</option>
<option>option 5</option>
</select>
</div>
</div>
</div>
</form>
</div>
</div>
</section>
</div>

{{--  --}}
<footer class="main-footer">
<div class="float-right d-none d-sm-block">
<b>By dear DIOUF</b>
</div>
<strong>Copyright &copy; 2022-2023 <a href="https://adminlte.io">Ministère</a>.</strong> All rights reserved.
</footer>

<aside class="control-sidebar control-sidebar-dark">

</aside>

</div>

@livewireScripts

<script src="{{mix("js/app.js")}}"></script>
</body>
</html>



{{--  --}}