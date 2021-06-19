<!DOCTYPE html>
<html lang="ru">
<head>
  <?php
    $website_title = 'JQuery';
    require 'blocks/head.php';
  ?>
</head>
<body class="body_color">
  <?php require 'blocks/header.php'; ?>

  

  <main class="container mt-5">
    <div class="row">
      <div class="col-md-10 mb-3 mt-5  ">
        <h2 >JQuery</h2><br>

        <span >To load a hosted library, copy and paste the HTML snippet for that library in your web page. <a href="https://developers.google.com/speed/libraries" target="_blank">Hosted Libraries
</a> </span>

          <div >
          <h4 class="jquery">basic selectors</h4>
          <p>JQUERY usually select elements using CSS-style selectors</p>
          <b>$('li.hot').addClass('complite')</b>
          <ul id="selectors">
          <li>'li.hot' - select element with class hot </li>
          <li>addClass() - method</li>
           </ul>

           <h4 class="jquery"> basic filters  </h4> 
           <ul id="filters">
           <li>:not</li>
           <li>:first</li>
            <li>:last</li>
            <li>:even</li>
            <li>:odd</li>
            <li>:eq(index)</li>
            <li>:gt(index)</li>
            <li>:lt(index)</li>
            <li>:header</li>
            <li>:animated</li>
            <li>:focus</li>
            <li>:contains('text')</li>
            <li>:empty</li>
            <li>parent</li>
            <li>:has(selector)</li>
            <li>:hidden</li>
            <li>:visible</li>
           </ul>

           <h4 class="jquery"> getting element content</h4>
           <ul id="content">
               <li>.html()</li>
               <li>.txt()</li>
           </ul>

           <h4 class="jquery"> updating elements </h4>
           <ul id="update">
               <li>.html()</li>
               <li>.txt()</li>
               <li>.remove()</li>
               <li>.replaceWith()</li>
                <b> example</b> <br>
                <span>   $(function(){
                        $('li:contains("red")').text('orange');    <i>//set the new text content </i><br>
                        $('li.color').html(function(){ <i>//new content may  include html</i>   <br> 
                            return '&lt;em &gt;' + $(this).text() + '&lt;/em&gt;';<br>
                        }); <br>
                        $('li#one').remove(); <br>
                    });
                </span>
           </ul>

           <h4 class="jquery"> inserting elements  </h4>
           <ul id="insert">
               <li>.before()</li>
               <li>.after()</li>
               <li>.prepand()</li>
               <li>.append()</li>
               <img src="/img/qjuery_insertingElem.jpg" alt="img"></li>
           </ul>
        
           <h4 class="jquery"> getting and setting attribute values  </h4>
           <ul id="attr">
               <li>.attr('id')  <i>//get id value</i> <br>.attr('id', 'attrvalue')  <i>//set attribute value</i></li>
               <li>.addClass() //adds class. It does not overwrite existing value</li>
               <li>.removeAttr('class') //remove attribute and its value</li>
               <li>.romoveClass() //removes a value from the class? leaving any other class names</li>
           </ul>

           <h4 class="jquery"> getting and setting CSS properties  </h4>
           <ul id="css">
               <li>.css('background') <i>//returnes background value</i></li>
               <li>.css({ <br>
                   'background': '#000', <br>
                   'font-family' : 'Odibee Sans', <br>
                   'padding-left' : '+=20'});</li> <i> // setting multiple properties</i>
           </ul>

           <h4 class="jquery"> working with each element in a selection  </h4>
           <ul id="each">
              <li>Get information from each element in the matched set</li>
              <li>Perform a series of actions on each of the elements</li>
              <p>$('li').each(function(){...} <br>
            .each() applies the same code to each element in the selection</p> 
            </ul>

            <h4 class="jquery"> events  </h4>
            <ul id="events">
            <li>Use .on() to indicate which event you want to respond to</li>
            <li>Example: <br>
                $('li').on('clic', function(){ <br>
                $(this).addClass('complete'); <br>}); <br>
                <button class="changeBG btn btn-info" data-toogle="tooltip" title="double click">Change background color</button></li>
                <li>
                <ul> <b><u>JQuery most popular events: </u></b>
                    <li><b>UI:</b>  focus, blur, change </li>
                    <li><b>KEYBOARD:</b>  input, keyup, keydown, keypress </li>
                    <li><b>MOUSE:</b>  click, dblclick, mouseup, mousedown, mouseover, mousemove, mouseout,hover  </li>
                    <li><b>FORM:</b>  submit, select, change </li>
                    <li><b>DOCUMENT:</b>  ready, load, unload </li>
                    <li><b>BROWSER:</b>  error, resize, scroll </li>
                    </ul></li>
            </ul>
            
            <h4 class="jquery"> the event object  </h4>
            <ul id="eventObj"> 
                    Example:
                $('li').on('click' function(e){<br>
                eventType = e.type;<br>})<br>
                <b>Properties </b>
                <li><b>type</b> - Type of event (e.g. click, mouseover)</li>
                <li><b>which</b> - Button or key that was pressed</li>
                <li><b>data</b> - An object literal containing extra information passed to the function when the event fires</li>
                <li><b>terget</b> - DOM element that initiated the event</li>
                <li><b>pageX, pageY</b> - Mouse position from left edge(top) of viewport</li>
                <li><b>tineStamp</b> -  Number of milliseconds from Jan 1st, 1970, to when the event was triggered (known as Unix Time)</li>
                <b>Methods</b>
                <li><b>.peventDefault()</b> - Prevents the dedault (e.g., submiting a form</li>
                <li><b>.stopPropagation()</b> - Stops the event bubbling up to ancestors</li>
            </ul>

            <h4 class="jquery">effects</h4>
            <ul id="effects">
            <li><b>.show(), .hide(), .toggle()</b> - Displays, hides selected elements, toggles between showing ang hiding</li>
            <li><b>.fadeIn(), .fadeOut(), .fadeTo(), .fadeToggle()</b> - Hides/shows selected elements by changing thair opacity </li> 
            <li><b>.slideUp(), .slideDown(), .slideToogle()</b> - Shows/Hides selected elements with a sliding motion</li>
            <li><b>.delay()</b> - Delay execution of subsequent items in queue</li>
            <li><b>.stop()</b> - Stops an animation if it is currently running</li>
            <li><b>.animate()</b> - Create custom animations</li>
            <button class='animBtn btn btn-info'>Show effects</button>
            </ul>

            <h4 class="jquery">traversing the DOM</h4>
            <ul id="traversing">
            <li><b>.find()</b> - All elements within current selection that match selector</li>
            <li><b>.closest()</b> = Nearest ancestor (not just parent) that matches selector</li>
            <li><b>.parent()</b> - Direct parent</li>
            <li><b>.parents()</b> - All parents</li>
            <li><b>.children()</b> - All children</li>
            <li><b>.siblings()</b> - All siblings</li>
            <li><b>.next()</b> - Next sibling</li>
            <li><b>.nextAll()</b> - All subsequent siblings</li>
            <li><b>.prev()</b> - Previous sibling </li>
            <li><b>.prevAll()</b> - All previous siblings</li>
            </ul> 

            <h4 class="jquery">finding items by order</h4>
            <ul id="finding">
            <li><b>.eq()</b> - The element that matches the index number</li>
            <li><b>:lt()</b>- Elemets with an index less than the number specified</li>
            <li><b>:gt()</b> - Elemets with an index greater than the number specified</li><br>

           <b>Example: </b> <br>
            $(function(){ <br>
                $('li:lt(2)').removeClass('hot');<br>
                $('li').eg(0).addClass('complete');<br>
                $('li:gt(2)').addClass('cool');<br>

            });

            </ul>

            <h4 class="jquery">selecting form elements</h4>
            <ul id="selectingform">
            <li><b> :button </b> - Selects all button elements and elements of type button.</li>
            <li><b>:checkbox </b> - Selects all elements of type checkbox.</li>
            <li><b>:checked </b> - Matches all elements that are checked or selected.</li>
            <li><b>:disabled </b> - Selects all elements that are disabled.</li>
            <li><b>:enabled Selecr</b> - Selects all elements that are enabled.</li>
            <li><b>:file </b> - Selects all elements of type file.</li>
            <li><b>:focus </b> - Selects element if it is currently focused.</li>
            <li><b>:image </b> - Selects all elements of type image.</li>
            <li><b>:input </b> - Selects all input, textarea, select and button elements.</li>
            <li><b>:password </b> - Selects all elements of type password.</li>
            <li><b>:radio </b> - Selects all elements of type radio.</li>
            <li><b>:reset </b> - Selects all elements of type reset.</li>
            <li><b>:selected </b> - Selects all elements that are selected.</li>
            <li><b>:submit </b> - Selects all elements of type submit.</li>
            <li><b>:text </b> - Selects all input elements of type text.</li>
            </ul>

            <h4 class="jquery">form methods and events</h4>
            <ul id="formmethodsandevents">
            <li><b>.val()</b> - It can be used to get the value of the first element in a matched set, or update the value of all of them</li>
            <li><b>.filter()</b> - Used to filter a jQuery selection using a second selector (especially form-specific filters)</li>
            <li><b>.is</b> - Often used with filterrs to check whether a form input is selected/checked</li>
            $.isNumeris
            </ul>
            
            
        </div>

        
      </div>
      
    </div>
  </main>

  <?php require 'blocks/footer.php'; ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
           $('#selectors, #filters,#content, #update, #insert, #attr, #css, #each, #events, #eventObj, #effects, #traversing, #finding, #selectingform').hide(); 
           $('h4:contains("basic selectors")').on('click', function(){
               $('ul#selectors').slideToggle();
           });
           $('h4:contains("basic filters")').on('click', function(){
               $('ul#filters').slideToggle();
           });
           $('h4:contains("getting element content")').on('click', function(){
               $('ul#content').slideToggle();
           });
           $('h4:contains("updating elements")').on('click', function(){
               $('ul#update').slideToggle();
           });
           $('h4:contains("inserting elements")').on('click', function(){
               $('ul#insert').slideToggle();
           });
           $('h4:contains("getting and setting attribute values")').on('click', function(){
               $('ul#attr').slideToggle();
           });
           $('h4:contains("getting and setting CSS properties")').on('click', function(){
               $('ul#css').slideToggle();
           });
           $('h4:contains("working with each element in a selection")').on('click', function(){
               $('ul#each').slideToggle();
           });
           $('ul#events').prev().on('click', function(){
               $('ul#events').slideToggle();
           });
           $('h4:contains("the event object")').on('click', function(){
               $('ul#eventObj').slideToggle();
           });
           $('h4:contains("effects")').on('click', function(){
               $('ul#effects').slideToggle();
               $( '#anim' ).remove();
                         
                   
           });
           $('.animBtn').on('click',function(){
            $('ul#effects').fadeTo("slow", 0.5);
               $('ul#effects').delay(2000).fadeTo("slow", 1 );
               $('ul#effects').delay(2000).animate({
                    width: [ "toggle", "swing" ],
                    height: [ "toggle", "swing" ],
                    opacity: "toggle"
                }, 2000, "linear", function() {
                    $( this ).after( "<div id='anim'>Animation complete.</div> " );
                    });                 
           });

           $('h4:contains("traversing the DOM")').on('click', function(){
               $('ul#traversing').slideToggle();
           });

           $('h4:contains("finding")').on('click', function(){
               $('ul#finding').slideToggle();
           });
           $('h4:contains("selecting form")').on('click', function(){
               $('ul#selectingform').slideToggle();
           });
           

           $('.changeBG').on('dblclick', function(){
                $('.changeBG').addClass('changedBG');
                $('.changeBG').removeClass('changeBG');
                $('body').css('background-color', '#9ab3f5');
                $('.bg-color, footer').css('background-color', '#7579e7');
                $('.changedBG').text('Back color');

                $('.changedBG').on('dblclick', function(){    
                    $('.changedBG').addClass('changeBG');
                    $('.changedBG').removeClass('changedBG');
                    $('body').css('background-color', '#a2d5f2');
                    $('.bg-color, footer').css('background-color', '#07689f');
                    $('.changeBG').text('Change background color');
                });                
            });
            

            

          

           
                
           </script>

  
</body>
</html>
