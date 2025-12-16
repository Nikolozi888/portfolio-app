<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!-- User details -->
        <div class="user-profile text-center mt-3">

            <div class="mt-3">
                <h4 class="font-size-16 mb-1">{{ current_user()->name }}</h4>

            </div>
        </div>

        <div id="sidebar-menu">
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ route('admin.index') }}" class="waves-effect">
                        Dashboard
                    </a>
                </li>


                <li class="menu-title">Contact</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Emails</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.emails.index') }}">Inbox</a></li>
                        <li><a href="{{ route('admin.emails.replied') }}">Replied Emails</a></li>
                    </ul>
                </li>


                <li class="menu-title">Pages</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>About</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.about.index') }}">About Info</a></li>
                        @if (App\Models\About::count() == 0)
                            <li><a href="{{ route('admin.about.create') }}">About Create</a></li>
                        @endif
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <span>multiImage</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('admin.about.multiImage.index') }}">All Multi Images</a></li>
                                <li><a href="{{ route('admin.about.multiImage.create') }}">Multi Images Create</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Main Page Information</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.informations.index') }}">Information</a></li>
                        @if (App\Models\Information::count() == 0)
                            <li><a href="{{ route('admin.informations.create') }}">Create Information</a></li>
                        @endif
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Tags</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.tags.index') }}">All Tags</a></li>
                        <li><a href="{{ route('admin.tags.create') }}">Create Tag</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Categories</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.categories.index') }}">All Categories</a></li>
                        <li><a href="{{ route('admin.categories.create') }}">Create Category</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Blogs</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.blogs.index') }}">All Blogs</a></li>
                        <li><a href="{{ route('admin.blogs.create') }}">Create Blog</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Feedbacks</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.feedbacks.index') }}">All Feedbacks</a></li>
                        <li><a href="{{ route('admin.feedbacks.create') }}">Create Feedback</a></li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <span>multiImage</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('admin.feedbacks.multiImage.index') }}">All Multi Images</a></li>
                                <li><a href="{{ route('admin.feedbacks.multiImage.create') }}">Multi Images Create</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Partners</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.partners.index') }}">All Partners</a></li>
                        <li><a href="{{ route('admin.partners.create') }}">Create Partner</a></li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <span>multiImage</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('admin.partners.multiImage.index') }}">All Multi Images</a></li>
                                <li><a href="{{ route('admin.partners.multiImage.create') }}">Multi Images Create</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Services</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.services.index') }}">All Services</a></li>
                        <li><a href="{{ route('admin.services.create') }}">Create Service</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Portfolios</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.portfolios.index') }}">All Portfolios</a></li>
                        <li><a href="{{ route('admin.portfolios.create') }}">Create Portfolio</a></li>
                    </ul>
                </li>


                <li class="menu-title">Page Control</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Contact Us Information</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.contactInfo.index') }}">Contact Us Information</a></li>
                        @if (App\Models\ContactInfo::count() == 0)
                            <li><a href="{{ route('admin.contactInfo.create') }}">Contact Us Create</a></li>
                        @endif
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Address Information</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.addressInfo.index') }}">Address Information</a></li>
                        @if (App\Models\AddressInfo::count() == 0)
                            <li><a href="{{ route('admin.addressInfo.create') }}">Address Create</a></li>
                        @endif
                    </ul>
                </li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Social Information</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.socialInfo.index') }}">Social Information</a></li>
                        @if (App\Models\SocialInfo::count() == 0)
                            <li><a href="{{ route('admin.socialInfo.create') }}">Social Create</a></li>
                        @endif
                    </ul>
                </li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Contact Form Information</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.messageInfo.index') }}">Contact Form Information</a></li>
                        @if (App\Models\MessageInfo::count() == 0)
                            <li><a href="{{ route('admin.messageInfo.create') }}">Contact Form Create</a></li>
                        @endif
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Socail Links Information</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.links.index') }}">Links</a></li>
                        <li><a href="{{ route('admin.links.create') }}">Link Create</a></li>
                    </ul>
                </li>

                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            </ul>
        </div>
    </div>
</div>