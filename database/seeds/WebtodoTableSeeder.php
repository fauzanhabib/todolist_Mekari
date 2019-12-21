<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eluquent\Model;
use App\List_todo;

class WebtodoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        List_todo::create(['name'  => 'index.html',
                          'desc' => "&lt;!DOCTYPE html&gt;
                          &lt;html&gt;
                              &lt;head&gt;
                                  &lt;title&gt;Laravel&lt;/title&gt;
                          
                                  &lt;link href=&quot;https://fonts.googleapis.com/css?family=Lato:100&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot;&gt;
                                  &lt;link rel=&quot;stylesheet&quot; href=&quot;https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css&quot; integrity=&quot;sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh&quot; crossorigin=&quot;anonymous&quot;&gt;
                                  &lt;script src=&quot;https://code.jquery.com/jquery-3.4.1.slim.min.js&quot; integrity=&quot;sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n&quot; crossorigin=&quot;anonymous&quot;&gt;&lt;/script&gt;
                                  &lt;script src=&quot;https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js&quot; integrity=&quot;sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo&quot; crossorigin=&quot;anonymous&quot;&gt;&lt;/script&gt;
                                  &lt;script src=&quot;https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js&quot; integrity=&quot;sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6&quot; crossorigin=&quot;anonymous&quot;&gt;&lt;/script&gt;
                                  &lt;link href=&quot;{{ URL::asset('css/app.css') }}&quot; rel=&quot;stylesheet&quot;&gt;
                                  &lt;link href=&quot;{{ URL::asset('css/prism.css') }}&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot;&gt;
                              &lt;/head&gt;
                              &lt;body&gt;
                             
                          &lt;br/&gt;&lt;br/&gt;
                          &lt;div class=&quot;tabs&quot;&gt;
                            &lt;div class=&quot;tab-button-outer&quot;&gt;
                            &lt;nav class=&quot;nav nav-tabs&quot;&gt;
                              &lt;a href=&quot;{{ route('demo')}}&quot; class=&quot;nav-item nav-link active&quot;&gt;The Demo&lt;/a&gt;
                              &lt;a href=&quot;{{ route('code')}}&quot; class=&quot;nav-item nav-link&quot;&gt;The Code&lt;/a&gt;
                              &lt;a href=&quot;#&quot; class=&quot;nav-item nav-link&quot;&gt;Messages&lt;/a&gt;
                              &lt;a href=&quot;#&quot; class=&quot;nav-item nav-link disabled&quot; tabindex=&quot;-1&quot;&gt;Reports&lt;/a&gt;
                          &lt;/nav&gt;
                            &lt;/div&gt;
                            &lt;main class=&quot;py-4&quot;&gt;
                                      @yield('content')
                                  &lt;/main&gt; 
                          
                             &lt;/body&gt;
                          &lt;script src=&quot;{{ URL::asset('js/prism.js') }}&quot;&gt;&lt;/script&gt;
                          &lt;/html&gt;",
                          'type'=> 'html'] );

        List_todo::create(['name'  => 'Web_todoController.php',
                          'desc' => "&lt;?php

                          namespace App\Http\Controllers;
                          use DB;
                          use Illuminate\Http\Request;
                          
                          use App\Http\Requests;
                          use App\List_todo;
                          
                          class Web_todoController extends Controller
                          {
                              public function get_code(){
                                   = DB::table(&apos;list_todo&apos;)-&gt;get();
                                  //dd();
                                  return view(&apos;code&apos;, [&apos;list&apos; =&gt; ]);
                              }
                          
                              public function get_demo(){
                                  return view(&apos;index&apos;);
                              }
                          }
                          ",
                          'type' => 'php']);


        List_todo::create(['name' => 'app.css',
                            'desc' => "body {
                                font-family: &apos;Open Sans&apos;, sans-serif;
                                font-weight: 300;
                            }
                            
                            .tabs {
                                max-width: 1100px;
                                margin: 0 auto;
                                padding: 0 20px;
                            }
                            
                            #tab-button {
                                display: table;
                                table-layout: fixed;
                                width: 100%;
                                margin: 0;
                                padding: 0;
                                list-style: none;
                            }
                            #tab-button li {
                                display: table-cell;
                                width: 20%;
                            }
                            #tab-button li a {
                                display: block;
                                padding: .5em;
                                background: #eee;
                                border: 1px solid #ddd;
                                text-align: center;
                                color: #000;
                                text-decoration: none;
                            }
                            
                            #tab-button li:not(:first-child) a {
                                border-left: none;
                            }
                            #tab-button li a:hover,
                                
                            #tab-button .is-active a {
                                border-bottom-color: transparent;
                                background: #fff;
                            }
                                
                            .tab-contents {
                                padding: .5em 2em 1em;
                                border: 1px solid #ddd;
                            }
                            
                            .tab-button-outer {
                                display: none;
                            }
                                
                            .tab-contents {
                                margin-top: 20px;
                            }
                            @media screen and (min-width: 768px) {
                                
                                .tab-button-outer {
                                    position: relative;
                                    z-index: 2;
                                    display: block;
                                }
                            
                                .tab-select-outer {
                                    display: none;
                                }
                                    
                                .tab-contents {
                                    position: relative;
                                    top: -1px;
                                    margin-top: 0;
                                }
                            }
                             /* Remove margins and padding from the list */
                                ul {
                                margin: 0;
                                padding: 0;
                              }
                              
                              /* Style the list items */
                              ul li {
                                cursor: pointer;
                                position: relative;
                                padding: 12px 8px 12px 40px;
                                list-style-type: none;
                                background: #eee;
                                font-size: 18px;
                                transition: 0.2s;
                                
                                /* make the list items unselectable */
                                -webkit-user-select: none;
                                -moz-user-select: none;
                                -ms-user-select: none;
                                user-select: none;
                              }
                              
                              /* Set all odd list items to a different color (zebra-stripes) */
                              ul li:nth-child(odd) {
                                background: #f9f9f9;
                              }
                              
                              /* Darker background-color on hover */
                              ul li:hover {
                                background: #ddd;
                              }
                              
                              /* When clicked on, add a background color and strike out text */
                              ul li.checked {
                                background: #888;
                                color: #fff;
                                text-decoration: line-through;
                              }
                              
                              /* Add a &quot;checked&quot; mark when clicked on */
                              ul li.checked::before {
                                content: &apos;&apos;;
                                position: absolute;
                                border-color: #fff;
                                border-style: solid;
                                border-width: 0 2px 2px 0;
                                top: 10px;
                                left: 16px;
                                transform: rotate(45deg);
                                height: 15px;
                                width: 7px;
                              }
                              
                              /* Style the close button */
                              .close {
                                position: absolute;
                                right: 0;
                                top: 0;
                                padding: 12px 16px 12px 16px;
                              }
                              
                              .close:hover {
                                background-color: #f44336;
                                color: white;
                              }
                              
                              /* Style the header */
                              .header {
                                background-color: #f44336;
                                padding: 30px 40px;
                                color: white;
                                text-align: center;
                              }
                              
                              /* Clear floats after the header */
                              .header:after {
                                content: &quot;&quot;;
                                display: table;
                                clear: both;
                              }
                              
                              /* Style the input */
                              input {
                                margin: 0;
                                border: none;
                                border-radius: 0;
                                width: 75%;
                                padding: 10px;
                                float: left;
                                font-size: 16px;
                              }
                              
                              /* Style the &quot;Add&quot; button */
                              .addBtn {
                                padding: 10px;
                                width: 25%;
                                background: #d9d9d9;
                                color: #555;
                                float: left;
                                text-align: center;
                                font-size: 16px;
                                cursor: pointer;
                                transition: 0.3s;
                                border-radius: 0;
                              }
                              
                              .addBtn:hover {
                                background-color: #bbb;
                              }",
                              'type' => 'css']);
    List_todo::create(['name' => 'app.js',
                        'desc' => "&lt;script&gt;
                        // Create a &quot;close&quot; button and append it to each list item
                    var myNodelist = document.getElementsByTagName(&quot;LI&quot;);
                    var i;
                    for (i = 0; i &lt; myNodelist.length; i++) {
                      var span = document.createElement(&quot;SPAN&quot;);
                      var txt = document.createTextNode(&quot;\u00D7&quot;);
                      span.className = &quot;close&quot;;
                      span.appendChild(txt);
                      myNodelist[i].appendChild(span);
                    }
                    
                    // Click on a close button to hide the current list item
                    var close = document.getElementsByClassName(&quot;close&quot;);
                    var i;
                    for (i = 0; i &lt; close.length; i++) {
                      close[i].onclick = function() {
                        var div = this.parentElement;
                        div.style.display = &quot;none&quot;;
                      }
                    }
                    
                    // Add a &quot;checked&quot; symbol when clicking on a list item
                    var list = document.querySelector(&apos;ul&apos;);
                    list.addEventListener(&apos;click&apos;, function(ev) {
                      if (ev.target.tagName === &apos;LI&apos;) {
                        ev.target.classList.toggle(&apos;checked&apos;);
                      }
                    }, false);
                    // Create a new list item when clicking on the &quot;Add&quot; button
                    function newElement() {
                      var li = document.createElement(&quot;li&quot;);
                      var inputValue = document.getElementById(&quot;myInput&quot;).value;
                      var t = document.createTextNode(inputValue);
                      li.appendChild(t);
                      if (inputValue === &apos;&apos;) {
                        alert(&quot;You must write something!&quot;);
                      } else {
                        document.getElementById(&quot;myUL&quot;).appendChild(li);
                      }
                      document.getElementById(&quot;myInput&quot;).value = &quot;&quot;;
                    
                      var span = document.createElement(&quot;SPAN&quot;);
                      var txt = document.createTextNode(&quot;\u00D7&quot;);
                      span.className = &quot;close&quot;;
                      span.appendChild(txt);
                      li.appendChild(span);
                    
                      for (i = 0; i &lt; close.length; i++) {
                        close[i].onclick = function() {
                          var div = this.parentElement;
                          div.style.display = &quot;none&quot;;
                        }
                      }
                    }
                    &lt;/script&gt;",
                        'type' => 'js' ]);
    }
}
