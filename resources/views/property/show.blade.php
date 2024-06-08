<div class="container my-4">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4>{{ $property->title }}</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Property Type:</strong> <span>{{ $property->propertyType->name }}</span></p>
                    <p><strong>City:</strong> <span>{{ $property->city->name }}</span></p>
                    <p><strong>Location:</strong> <span>{{ $property->location->name }}</span></p>
                    <p><strong>Property Purpose:</strong> <span>{{ $property->property_purpose }}</span></p>
                    <p><strong>Land Area:</strong> <span>{{ $property->land_area }}</span></p>
                    <p><strong>Apartment Size:</strong> <span>{{ $property->appartment_size }}</span></p>
                    <p><strong>Bedroom:</strong> <span>{{ $property->bed_room }}</span></p>
                    <p><strong>Bathroom:</strong> <span>{{ $property->bath_room }}</span></p>
                    <p><strong>Drawing Room:</strong> <span>{{ $property->drawing_room }}</span></p>
                    <p><strong>Dining Room:</strong> <span>{{ $property->dining_room }}</span></p>
                    <p><strong>Garage:</strong> <span>{{ $property->garage }}</span></p>
                </div>
                <div class="col-md-6">
                    @if ($property->image)
                    <div class="mb-3">
                        <p><strong>Property Image:</strong></p>
                        <img src="{{ asset($property->image) }}" alt="image" class="img-fluid img-thumbnail" style="max-height: 268px;">
                    </div>
                    @else
                    <p><strong>Image:</strong> No Image</p>
                    @endif
                </div>
            </div>
            <hr>
            <div class="owner-info">
                <h4>Owner Information</h4>
                <p><strong>Full Name:</strong> <span>{{ $property->owner_name }}</span></p>
                <p><strong>Phone:</strong> <span>{{ $property->owner_phone }}</span></p>
                <p><strong>Email:</strong> <span>{{ $property->owner_email }}</span></p>
                <p><strong>Facebook Link:</strong> <span><a href="{{ $property->owner_facebook }}" target="_blank">{{ $property->owner_facebook }}</a></span></p>
                <p><strong>Twitter Link:</strong> <span><a href="{{ $property->owner_twitter }}" target="_blank">{{ $property->owner_twitter }}</a></span></p>
                <p><strong>LinkedIn Link:</strong> <span><a href="{{ $property->owner_linkedin }}" target="_blank">{{ $property->owner_linkedin }}</a></span></p>
                <p><strong>Instagram Link:</strong> <span><a href="{{ $property->owner_instagram }}" target="_blank">{{ $property->owner_instagram }}</a></span></p>
            </div>
            <hr>
            <div class="property-description">
                <p><strong>Property Description:</strong> <span>{{ $property->description }}</span></p>
            </div>
        </div>
    </div>
</div>
