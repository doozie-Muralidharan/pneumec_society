<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Add custom styles for the sidebar */
        .sidebar {
            transition: transform 0.7s ease, box-shadow 0.7s ease, width 0.7s ease;
            min-height: 100%;
            /* Ensure the sidebar takes full height */
        }

        .sidebar.closed {
            transform: translateX(-100%);
            box-shadow: none;
            width: 0;
        }

        .fixed-header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 999;
            /* Adjust the z-index as needed */
        }

        .content {
            transition: width 0.7s ease;
        }

        .content.closed {
            width: calc(100% - 64px);
            /* Adjust the width based on your sidebar width */
        }

        /* Hide the sidebar links when the sidebar is closed */
        .sidebar.closed .nav-links {
            display: none;
        }
    </style>
    <title>Fixed Header Example</title>
</head>

<body>
    @include('home.layouts.header')
    <div class="flex h-screen bg-gray-100">
        @include('home.layouts.sidenav')

        <div class="flex-1 p- content">
            @yield('content')
        </div>
    </div>

    <script>
        // JavaScript function to toggle the sidebar open and closed
        function toggleSidebar() {
            const sidebar = document.querySelector('.sidebar');
            sidebar.classList.toggle('closed');

            const content = document.querySelector('.content');
            content.classList.toggle('closed');

            // Toggle the visibility of the sidebar links
            const navLinks = document.querySelectorAll('.nav-links');
            navLinks.forEach(link => {
                link.classList.toggle('hidden');
            });

            // Adjust the sidebar height based on the content height
            adjustSidebarHeight();
        }

        document.addEventListener('mousemove', function(event) {
            const mouseX = event.clientX;
            if (mouseX < 10) { // Adjust the value as needed
                const sidebar = document.querySelector('.sidebar');
                sidebar.classList.remove('closed');

                const content = document.querySelector('.content');
                content.classList.remove('closed');

                // Show the sidebar links
                const navLinks = document.querySelectorAll('.nav-links');
                navLinks.forEach(link => {
                    link.classList.remove('hidden');
                });

                // Adjust the sidebar height based on the content height
                adjustSidebarHeight();
            }
        });

        // JavaScript function to adjust the sidebar height based on content height
        function adjustSidebarHeight() {
            const sidebar = document.querySelector('.sidebar');
            const content = document.querySelector('.content');

            if (!sidebar || !content) {
                return;
            }

            const contentHeight = content.clientHeight;
            sidebar.style.minHeight = contentHeight + 'px';
        }

        // Call adjustSidebarHeight initially and on window resize
        window.addEventListener('resize', adjustSidebarHeight);
        window.addEventListener('load', adjustSidebarHeight);
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>

</html>
