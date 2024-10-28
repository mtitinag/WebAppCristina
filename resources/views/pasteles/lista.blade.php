<h1>Lista de pasteles</h1><br>
 @if( $pasteles->count() > 10 )
 <h2>Hay muchos Pasteles</h2><br>
 @endif
 <ul>
 @foreach($pasteles as $pastel)
 <li>{{ $pastel->nombre }}</li>
 @endforeach
 </ul>