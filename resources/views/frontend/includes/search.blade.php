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
            <div class="col-md-12 mb-2">
                <div class="form-group">
                    <label class="pb-2" for="Keyword">Keyword</label>
                    <input type="text" class="form-control form-control-lg form-control-a" id="Keyword" name="keyword" placeholder="Keyword">
                </div>
            </div>
            <div class="col-md-6 mb-2">
                <div class="form-group mt-3">
                    <label class="pb-2" for="Type">Type</label>
                    <select class="form-control form-select form-control-a custom-select" id="Type" name="filter">
                        <option value="sale" {{ request('filter') == 'sale' ? 'selected' : '' }}>For Sale</option>
                        <option value="rent" {{ request('filter') == 'rent' ? 'selected' : '' }}>For Rent</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6 mb-2">
                <div class="form-group mt-3">
                    <label class="pb-2" for="city">City</label>
                    <select class="form-control form-select form-control-a" id="city" name="city">
                        <option>All City</option>
                        <option>Alabama</option>
                        <option>Arizona</option>
                        <option>California</option>
                        <option>Colorado</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6 mb-2">
                <div class="form-group mt-3">
                    <label class="pb-2" for="bedrooms">Bedrooms</label>
                    <select class="form-control form-select form-control-a" id="bedrooms" name="bedrooms">
                        <option>Any</option>
                        <option>01</option>
                        <option>02</option>
                        <option>03</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6 mb-2">
                <div class="form-group mt-3">
                    <label class="pb-2" for="garages">Garages</label>
                    <select class="form-control form-select form-control-a" id="garages" name="garages">
                        <option>Any</option>
                        <option>01</option>
                        <option>02</option>
                        <option>03</option>
                        <option>04</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6 mb-2">
                <div class="form-group mt-3">
                    <label class="pb-2" for="bathrooms">Bathrooms</label>
                    <select class="form-control form-select form-control-a" id="bathrooms" name="bathrooms">
                        <option>Any</option>
                        <option>01</option>
                        <option>02</option>
                        <option>03</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6 mb-2">
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
            </div>
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

