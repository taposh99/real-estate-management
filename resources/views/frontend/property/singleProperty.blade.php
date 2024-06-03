@if(isset($property))
    <p>Property ID: {{ $property->id }}</p>
    <!-- Other property details -->
@else
    <p>Property not found.</p>
@endif