<h1>PAGE 3</h1></br>

<h1><a href="/">Home</a></h1></br>
<h1><a href="/page1">Page 1</a></h1></br>
<h1><a href="/page2">Page 2</a></h1></br>

<h1>/1 = lorem10</h1>
<h1>/a = lorem20</h1>
<h1>/a1 = lorem30</h1>

@if ($id == 1)
<h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, sunt.</h3>
@elseif ($id == "a")
<h3>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta suscipit nisi necessitatibus nesciunt minima quam ratione maxime sed accusantium quae.</h3>
@elseif ($id == "a1")
<h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea porro aut aliquid consequuntur ut. Ex pariatur vel, blanditiis, consequuntur sint quibusdam aspernatur laudantium, porro deleniti voluptates provident! Atque, provident necessitatibus.</h3>
@endif