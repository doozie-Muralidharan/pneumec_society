<!-- Sidebar -->
<aside class="bg-white text-black w-64 sidebar">
    <nav>
        <ul class="px-6 py-24 nav-links"> <!-- Add the 'nav-links' class here -->
            <li><a href="#" class="block py-2 px-4 text-2xl font-semibold"
                    onclick="toggleSidebar()">Hello,{{ auth()->user()->username }}!</a></li>
            <a href="javascript:void(0);" class="block py-2 px-4 hover:bg-gray-100"
                onclick="navigateToPage('{{ route('loan_type') }}');">Loan Type</a>
            <a href="javascript:void(0);" class="block py-2 px-4 hover:bg-gray-100"
                onclick="navigateToPage('{{ route('members') }}');">Member</a>

            <li><a href="#" class="block py-2 px-4 hover:bg-gray-100" onclick="toggleSidebar()">Services</a></li>
            <li><a href="#" class="block py-2 px-4 hover:bg-gray-100" onclick="toggleSidebar()">Contact</a></li>
        </ul>
    </nav>
</aside>


