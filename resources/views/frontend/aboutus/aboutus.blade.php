@extends('frontend.master')

@section('body')

<style>
.about-us-section {
    padding: 50px 0;
    background-color: #f9f9f9;
    text-align: center;
}

.about-us-title {
    font-size: 36px;
    margin-bottom: 20px;
    color: #333;
    text-transform: uppercase;
}

.about-us-subtitle {
    font-size: 28px;
    margin-top: 30px;
    margin-bottom: 10px;
    color: #555;
}

.about-us-content {
    font-size: 16px;
    color: #666;
    line-height: 1.6;
    margin-bottom: 20px;
}

.about-us-list {
    list-style: none;
    padding: 0;
    font-size: 16px;
    color: #666;
    text-align: left;
    display: inline-block;
    margin-bottom: 20px;
}

.about-us-list li {
    margin-bottom: 10px;
}

.about-us-list li::before {
    content: "✔️";
    margin-right: 8px;
    color: #007bff;
}
</style>

<br>
<div class="about-us-section" style="
    margin-top: 72px;">
    <div class="container">
        <h1 class="about-us-title">Welcome to RealEstate BD</h1>
        <p class="about-us-content">
            At RealEstate BD, we believe in turning your real estate dreams into reality. Whether you're looking to buy, sell, or rent, our dedicated team of professionals is here to guide you every step of the way.
        </p>

        <h2 class="about-us-subtitle">Who We Are</h2>
        <p class="about-us-content">
            Founded in 2020, RealEstate BD has grown into one of the leading real estate agencies in the region. With a team of experienced agents and a passion for helping people find their perfect home, we have built a reputation for excellence, integrity, and unparalleled service.
        </p>

        <h2 class="about-us-subtitle">Our Mission</h2>
        <p class="about-us-content">
            Our mission is to provide exceptional real estate services by understanding your needs and delivering customized solutions. We aim to make the process of buying, selling, or renting as smooth and stress-free as possible.
        </p>

        <h2 class="about-us-subtitle">What We Offer</h2>
        <ul class="about-us-list">
            <li>Residential Properties: Explore a wide range of homes, from cozy apartments to luxurious estates.</li>
            <li>Commercial Properties: Find the perfect space for your business, with listings that suit all sizes and budgets.</li>
            <li>Rental Services: We offer comprehensive rental services, ensuring you find a place that feels like home.</li>
            <li>Property Management: Let us handle the complexities of managing your property, so you can enjoy peace of mind.</li>
        </ul>

        <h2 class="about-us-subtitle">Our Values</h2>
        <p class="about-us-content">
            Integrity: We uphold the highest standards of honesty and fairness in all our interactions.<br>
            Customer Focus: Your satisfaction is our priority.
        </p>
    </div>
</div>
@endsection
