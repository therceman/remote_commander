<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remote Commander Daemons</title>
    <!-- Include Tailwind CSS CDN -->
    <link href="css/tailwind.min.css" rel="stylesheet">
    <style>
        * {
            font-family: monospace ;
        }
        /* Custom CSS for status dot */
        .status-dot {
            display: inline-block;
            width: 10px;
            height: 10px;
            border-radius: 50%;
        }
    </style>
</head>
<body class="bg-gray-100">
<div class="container mx-auto px-4 py-10">
    <h1 class="text-2xl font-bold mb-6 text-center">Remote Commander Daemons</h1>
    <table class="w-full bg-white border-collapse border border-gray-300 rounded">
        <thead>
        <tr>
            <th class="border border-gray-300 p-2">Daemon Status & Name</th>
            <th class="border border-gray-300 p-2 text-center">Control</th>
        </tr>
        </thead>
        <tbody>
        <!-- Replace this with dynamic content from your API -->
        <tr>
            <td class="border border-gray-300 p-2">
                <span class="status-dot bg-green-500"></span>
                <span class="hidden sm:inline">(Running) | </span>
                <span>Daemon 1</span>
            </td>
            <td class="border border-gray-300 p-2 text-center">
                <a href="#" class="bg-blue-500 text-white px-4 py-1 rounded">View</a>
            </td>
        </tr>
        <tr>
            <td class="border border-gray-300 p-2">
                <span class="status-dot bg-red-500"></span>
                <span class="hidden sm:inline">(Offline) | </span>
                <span>therceman@anton-pc</span>
            </td>
            <td class="border border-gray-300 p-2 text-center">
                <a href="#" class="bg-blue-500 text-white px-4 py-1 rounded">View</a>
            </td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>