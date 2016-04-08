<form action="{{ action('HomeController@postSave') }}" method="post">
    
    <div>
        <label for="name">Name of narrator/transmitter</label>
        <input type="text" name="name"/>
    </div>
    <div>
        <label for="date_of_birth">Date Of Birth</label>
        <input type="date" name="date_of_birth"/>
    </div>
    <div>
        <label for="date_of_death">Date Of Death</label>
        <input type="date" name="date_of_death"/>
    </div>
    <div>
        <input type="submit" name="submit"/>
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
    </div>
</form>