<!-- Sidebar -->
<aside class="bg-white text-black w-64 sidebar" onmouseleave="closeSidebarOnMouseLeave()">
    <nav>
        <ul class="px-6 py-24 nav-links"> <!-- Add the 'nav-links' class here -->
            <li><a href="#" class="block py-2 px-4 text-2xl font-semibold"
                    onclick="toggleSidebar()">Hello!</a></li>
            <li>
                <a href="#" class="block py-2 px-4 hover:bg-gray-100" onclick="toggleMainLink('mainLink1')">
                    Member
                </a>
                <!-- Sublinks for Main Link 1 -->
                <ul class="ml-4" id="mainLink1Sublinks">

                    <li>
                        <a href="{{ route('members') }}" class="block py-2 px-4 hover:bg-gray-100">Register</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="block py-2 px-4 hover:bg-gray-100" onclick="toggleMainLink('mainLink1')">
                    Company Details
                </a>
                <!-- Sublinks for Main Link 1 -->
                <ul class="ml-4" id="mainLink1Sublinks">

                    <li>
                        <a href="{{ route('company_details.create') }}" class="block py-2 px-4 hover:bg-gray-100">Add Company Details</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="{{ route('members') }}" class="block py-2 px-4 hover-bg-gray-100">Member</a>
            </li>
            <li><a href="#" class="block py-2 px-4 hover-bg-gray-100" onclick="toggleSidebar()">Services</a></li>
            <li><a href="#" class="block py-2 px-4 hover-bg-gray-100" onclick="toggleSidebar()">Contact</a></li>
        </ul>
    </nav>
</aside>

<script>
    // JavaScript function to navigate to a new page without reloading
    function navigateToPage(url) {
        window.history.pushState({}, '', url); // Update the URL without reloading
    }

    // JavaScript function to close the sidebar when the mouse leaves the sidebar area
    function closeSidebarOnMouseLeave() {
        const sidebar = document.querySelector('.sidebar');
        sidebar.classList.add('closed');

        const content = document.querySelector('.content');
        content.classList.add('closed');
    }

    // JavaScript function to toggle the visibility of sublinks
    function toggleMainLink(mainLinkId) {
        const sublinks = document.getElementById(mainLinkId + 'Sublinks');
        sublinks.classList.toggle('hidden');
    }
</script>
