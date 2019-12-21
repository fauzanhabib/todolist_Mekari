@extends('layouts.app')

@section('content')
<div class="container mt-3">
  Laravel 5.2 continues the improvements made in Laravel 5.1 by adding multiple authentication driver support, implicit model binding, simplified Eloquent global scopes, opt-in authentication scaffolding, middleware groups, rate limiting middleware, array validation improvements, and more.
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" href="#home">Index.blade.php</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#menu1">Web_TodoController.php</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#menu2">app.css</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#menu3">app.js</a>
    </li>
  </ul>

  <!-- Tab panes -->
 
  <div class="tab-content">
    @foreach ($data['list_todo'] as $list_todo)
    @if($list_todo->type == 'html')
      <div id="home" class="container tab-pane active"><br>
        <h3>{{$list_todo->name}}</h3>
        <pre><code class="language-markup">
          {{$list_todo->desc}}
        </code></pre>
      </div>
      @elseif($list_todo->type == 'php')
      <div id="menu1" class="container tab-pane fade"><br>
        <h3>{{$list_todo->name}}</h3>
        <pre><code class="language-php">
          {{$list_todo->desc}}
        </code></pre>
      </div>
      @elseif($list_todo->type == 'css')
      <div id="menu2" class="container tab-pane fade"><br>
        <h3>{{$list_todo->name}}</h3>
        <pre><code class="language-css">
          {{$list_todo->desc}}
        </code></pre>
      </div>
      @elseif($list_todo->type == 'js')
      <div id="menu3" class="container tab-pane fade"><br>
        <h3>{{$list_todo->name}}</h3>
        <pre><code class="language-javascript">
          {{$list_todo->desc}}
        </code></pre>
      </div>

      @endif
    
      @endforeach
    </div>
    
</div>

  <script>
  $(document).ready(function(){
    $(".nav-tabs a").click(function(){
      $(this).tab('show');
    });
  });
  </script>
@endsection