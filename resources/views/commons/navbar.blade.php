<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand" href="/">Microposts</a>
        
        <button type="button" class="navbar-toggler" data-toggle="collpase" data-target="#navbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collpase navbar-collpase" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="nav navbar-nav navbar-right">
                <li>{!! link_to_route('signup.get', 'Signup', [], ['class' => 'nav-link']) !!}</li>
                <li><a href="#">Login</a></li>
            </ul>
        </div>
        
    </nav>
    
</header>