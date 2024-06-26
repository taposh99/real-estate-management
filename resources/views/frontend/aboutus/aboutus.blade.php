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

        .ceo-section {
            padding: 70px 0;
            background-color: #fff;
            text-align: center;
        }

        .ceo-card {
            display: flex;
            align-items: center;
            gap: 30px;
            text-align: left;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .ceo-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .ceo-image {
            width: 300px;
            height: 300px;
            border-radius: 50%;
            overflow: hidden;
            margin-bottom: 0;
            flex-shrink: 0;
        }

        .ceo-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .ceo-details {
            display: flex;
            flex-direction: column;
        }

        .ceo-name {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
        }

        .ceo-title {
            font-size: 18px;
            color: #777;
            margin-bottom: 15px;
        }

        .ceo-bio {
            font-size: 16px;
            color: #666;
            line-height: 1.6;
        }
    </style>

    <div class="about-us-section" style="margin-top: 72px;">
        <div class="container">
            <h1 class="about-us-title">Welcome to RealEstate BD</h1>
            <p class="about-us-content">
                At RealEstate BD, we believe in turning your real estate dreams into reality. Whether you're looking to buy,
                sell, or rent, our dedicated team of professionals is here to guide you every step of the way.
            </p>

            <h2 class="about-us-subtitle">Who We Are</h2>
            <p class="about-us-content">
                Founded in 2020, RealEstate BD has grown into one of the leading real estate agencies in the region. With a
                team of experienced agents and a passion for helping people find their perfect home, we have built a
                reputation for excellence, integrity, and unparalleled service.
            </p>

            <h2 class="about-us-subtitle">Our Mission</h2>
            <p class="about-us-content">
                Our mission is to provide exceptional real estate services by understanding your needs and delivering
                customized solutions. We aim to make the process of buying, selling, or renting as smooth and stress-free as
                possible.
            </p>

            <h2 class="about-us-subtitle">What We Offer</h2>
            <ul class="about-us-list">
                <li>Residential Properties: Explore a wide range of homes, from cozy apartments to luxurious estates.</li>
                <li>Commercial Properties: Find the perfect space for your business, with listings that suit all sizes and
                    budgets.</li>
                <li>Rental Services: We offer comprehensive rental services, ensuring you find a place that feels like home.
                </li>
                <li>Property Management: Let us handle the complexities of managing your property, so you can enjoy peace of
                    mind.</li>
            </ul>

            <h2 class="about-us-subtitle">Our Values</h2>
            <p class="about-us-content">
                Integrity: We uphold the highest standards of honesty and fairness in all our interactions.<br>
                Customer Focus: Your satisfaction is our priority.
            </p>
        </div>
    </div>12:28 PM
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

    <!-- CEO Section -->
    <div class="ceo-section" style="padding: 70px 0;">
        <div class="container">
            <div class="ceo-card" style="display: flex; align-items: center; gap: 30px; text-align: left; background-color: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s, box-shadow 0.3s;">
                <div class="ceo-image" style="width: 300px; height: 300px; border-radius: 50%; overflow: hidden; margin-bottom: 0; flex-shrink: 0;">
                    <img src="{{ asset('adminAsset/assets/images/property.jpg') }}" alt="CEO Image" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="ceo-details" style="display: flex; flex-direction: column;">
                    <div class="ceo-name" style="margin: 0; padding: 5px 0; font-size: 24px; font-weight: bold;">Md. Aminur Rahman Mandal</div>
                    <div class="ceo-title" style="margin: 0; padding: 5px 0; font-size: 18px; color: #555;">CEO & Founder of Bankers Housing Society</div>
                    <div class="ceo-bio" style="margin-top: 10px; font-size: 16px; color: #777;">
                        Md. Aminur Rahman Mandal is the visionary behind RealEstate BD, bringing over 10 years of experience in the real estate
                        industry. His commitment to excellence and passion for helping clients find their perfect home drives
                        the success of our company.
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
