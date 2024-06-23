@php
use App\Models\PropertyType;
use App\Models\Location;
$propertyTypes = PropertyType::all();
$propertyLocations = Location::all();
@endphp
<div class="click-closed"></div>
<!--/ Form Search Star /-->
<div class="box-collapse">
    <div class="title-box-d">
        <h3 class="title-d">Search Property</h3>
    </div>
    <span class="close-box-collapse right-boxed bi bi-x"></span>
    <div class="box-collapse-wrap form">
        <form id="propertyForm" class="form-a" action="{{ route('property.page') }}" method="GET">
            <div class="row">
             
                <div class="col-md-6 mb-2">
                    <div class="form-group mt-3">
                        <label class="pb-2" for="Type">Property Type</label>
                        <select class="form-control form-select form-control-a" id="Type" name="p_type">
                            <option value="" {{ request('p_type') == '' ? 'selected' : '' }}>All</option>
                            @foreach($propertyTypes as $type)
                            <option value="{{ $type->id }}" {{ request('p_type') == $type->id ? 'selected' : '' }}>
                                {{ $type->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group mt-3">
                        <label class="pb-2" for="city">City</label>
                        <select class="form-control form-select form-control-a" id="city" name="city">
                            <option value="All City" {{ request('city') == 'All City' ? 'selected' : '' }}>All City</option>
                            <option value="Mymensingh" {{ request('city') == 'Mymensingh' ? 'selected' : '' }}>Mymensingh</option>
                            <option value="Dhaka" {{ request('city') == 'Dhaka' ? 'selected' : '' }}>Dhaka</option>
                            <option value="Khulna" {{ request('city') == 'Khulna' ? 'selected' : '' }}>Khulna</option>
                            <option value="Sylhet" {{ request('city') == 'Sylhet' ? 'selected' : '' }}>Sylhet</option>
                            <option value="Rajshahi" {{ request('city') == 'Rajshahi' ? 'selected' : '' }}>Rajshahi</option>
                            <option value="Chittagong" {{ request('city') == 'Chittagong' ? 'selected' : '' }}>Chittagong</option>
                            <option value="Barisal" {{ request('city') == 'Barisal' ? 'selected' : '' }}>Barisal</option>
                            <option value="Rangpur" {{ request('city') == 'Rangpur' ? 'selected' : '' }}>Rangpur</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6 mb-2">
                    <div class="form-group mt-3">
                        <label class="pb-2" for="Type">Location Area / Thana</label>
                        <select class="form-control form-select form-control-a" id="Type" name="location_type">
                            <option value="" {{ request('location_type') == '' ? 'selected' : '' }}>All</option>
                            @foreach($propertyLocations as $type)
                            <option value="{{ $type->id }}" {{ request('location_type') == $type->id ? 'selected' : '' }}>
                                {{ $type->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-6 mb-2">
                    <div class="form-group mt-3">
                        <label class="pb-2" for="Type">Property Purpose</label>
                        <select class="form-control form-select form-control-a" id="Type" name="filter">
                            <option value="" selected>All</option>
                            <option value="sale" {{ request('filter') == 'sale' ? 'selected' : '' }}>For Buy</option>
                            <option value="rent" {{ request('filter') == 'rent' ? 'selected' : '' }}>For Rent</option>
                            <option value="new_to_old" {{ request('filter') == 'new_to_old' ? 'selected' : '' }}>New to Old</option>

                        </select>
                    </div>
                </div>

                
                <div class="col-md-6 mb-2">
                    <div class="form-group mt-3">
                        <label class="pb-2" for="bedrooms">Bedrooms</label>
                        <select class="form-control form-select form-control-a" id="bedrooms" name="bedrooms">
                            <option value="Any" {{ request('bedrooms') == 'Any' ? 'selected' : '' }}>Any</option>
                            <option value="1" {{ request('bedrooms') == '1' ? 'selected' : '' }}>1</option>
                            <option value="2" {{ request('bedrooms') == '2' ? 'selected' : '' }}>2</option>
                            <option value="3" {{ request('bedrooms') == '3' ? 'selected' : '' }}>3</option>
                            <option value="4" {{ request('bedrooms') == '4' ? 'selected' : '' }}>4</option>
                            <option value="5" {{ request('bedrooms') == '5' ? 'selected' : '' }}>5</option>
                            <option value="6" {{ request('bedrooms') == '6' ? 'selected' : '' }}>6</option>
                            <option value="7" {{ request('bedrooms') == '7' ? 'selected' : '' }}>7</option>
                            <option value="8" {{ request('bedrooms') == '8' ? 'selected' : '' }}>8</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group mt-3">
                        <label class="pb-2" for="garages">Garages</label>
                        <select class="form-control form-select form-control-a" id="garages" name="garages">
                            <option value="Any" {{ request('garages') == 'Any' ? 'selected' : '' }}>Any</option>
                            <option value="1" {{ request('garages') == '1' ? 'selected' : '' }}>1</option>
                            <option value="2" {{ request('garages') == '2' ? 'selected' : '' }}>2</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group mt-3">
                        <label class="pb-2" for="bathrooms">Bathrooms</label>
                        <select class="form-control form-select form-control-a" id="bathrooms" name="bathrooms">
                            <option value="Any" {{ request('bathrooms') == 'Any' ? 'selected' : '' }}>Any</option>
                            <option value="1" {{ request('bathrooms') == '1' ? 'selected' : '' }}>1</option>
                            <option value="2" {{ request('bathrooms') == '2' ? 'selected' : '' }}>2</option>
                            <option value="3" {{ request('bathrooms') == '3' ? 'selected' : '' }}>3</option>
                            <option value="4" {{ request('bathrooms') == '4' ? 'selected' : '' }}>4</option>
                        </select>
                        </select>
                    </div>
                </div>
                <!-- <div class="col-md-6 mb-2">
                    <div class="form-group mt-3">
                        <label class="pb-2" for="price">Min Price</label>
                        <select class="form-control form-select form-control-a" id="price" name="min_price">
                            <option>Unlimite</option>
                            <option>$50,000</option>
                            <option>$100,000</option>
                            <option>$150,000</option>
                            <option>$200,000</option>
                        </select>
                    </div>
                </div> -->
              
                <div class="col-md-12">
                    <button type="button" class="btn btn-b" id="searchButton">Search Property</button>
                </div>
            </div>
        </form>
    </div>


</div>


<script>
    document.getElementById('searchButton').addEventListener('click', function() {
        document.getElementById('propertyForm').submit();
    });
</script>