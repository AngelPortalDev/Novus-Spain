<div class="navigation">
    <nav class="navigation__menu">
        <ul>
            <li class="navigation__menu--item">
                <a href="{{ route('about') }}" class="navigation__menu--item__link">About Us</a>
            </li>
           <li class="navigation__menu--item has-child has-arrow">
                <a href="javascript:void(0);" class="navigation__menu--item__link">Language Courses</a>
                <ul class="submenu sub__style">
                    <li><a href="{{ route('business-english-course') }}">Business English Course</a></li>
                    <li><a href="{{ route('general-english-course') }}">General English Course</a></li>
                    <li><a href="{{ route('diploma-spanish-language') }}">Diploma in Spanish Language</a></li>

                    <!-- <li><a href="{{ route('award-certificates') }}">Award Certificates</a></li> -->
                </ul>
            </li>
             <!-- <li class="navigation__menu--item">
                <a href="#" class="navigation__menu--item__link">Digital Campus</a>
            </li>
             <li class="navigation__menu--item">
                <a href="#" class="navigation__menu--item__link">English School</a>
            </li>     -->
            <li class="navigation__menu--item">
                <a href="{{ route('campus-life') }}" class="navigation__menu--item__link">Student Life</a>
            </li>
            <li class="navigation__menu--item">
                <a href="{{ route('visa-requirement') }}" class="navigation__menu--item__link">Visa Requirements</a>
            </li>
            <li class="navigation__menu--item">
                <a href="{{ route('faculty') }}" class="navigation__menu--item__link">Our Team</a>
            </li>
            
            <!-- <li class="navigation__menu--item has-child has-arrow">
                <a href="#" class="navigation__menu--item__link">News & Event</a>
                <ul class="submenu sub__style">
                    <li><a href="{{ route('event') }}">Event</a></li>
                    <li><a href="{{ route('event-details') }}">Event Details</a></li>
                </ul>
            </li> -->
            <!-- <li class="navigation__menu--item has-child has-arrow">
                <a href="#" class="navigation__menu--item__link">Blog</a>
                <ul class="submenu sub__style">
                    <li><a href="{{ route('blog') }}">Blog</a></li>
                    <li><a href="{{ route('blog-grid') }}">Blog Grid</a></li>
                    <li><a href="{{ route('blog-list') }}">Blog List</a></li>
                    <li><a href="{{ route('blog-details') }}">Blog Details</a></li>
                </ul>
            </li> -->
            <li class="navigation__menu--item">
                <a href="{{ route('contact') }}" class="navigation__menu--item__link">Contact</a>
            </li>
        </ul>
    </nav>
</div>
