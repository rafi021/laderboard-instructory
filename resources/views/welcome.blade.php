<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-violet-950">
    <!-- Team -->
    <div class="px-4 py-10 mx-auto text-white max-w-7xl sm:px-6 lg:px-8 lg:py-14">
        <!-- Title -->
        <div class="max-w-2xl mx-auto mb-10 text-center lg:mb-14">
            <h2 class="text-2xl font-bold text-white md:text-4xl md:leading-tight dark:text-white">Instructory</h2>
            <h4 class="text-2xl font-bold text-white md:text-4xl md:leading-tight dark:text-white">Instructor's
                Competition</h4>
            <p class="text-xl font-bold text-white">Season 11</p>
        </div>
        <!-- End Title -->

        <!-- Grid -->
        <h4 class="my-4 text-2xl font-bold text-center text-white md:text-4xl md:leading-tight dark:text-white">11th
            Competition
            Leaderboard​
        </h4>
        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($top_three as $item)
                <!-- Grid -->
                <!-- Card -->
                <a class="flex flex-col h-full p-5 transition duration-300 border border-gray-200 bg-violet-700 group hover:border-transparent hover:shadow-lg focus:outline-none focus:border-transparent focus:shadow-lg rounded-xl dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40 dark:focus:border-transparent dark:focus:shadow-black/40"
                    href="#">
                    <div class="aspect-w-16 aspect-h-11">
                        <img class="object-cover w-full rounded-xl" src="{{ asset("storage/$item->instructor_image") }}"
                            alt="Instructor Image">
                    </div>
                    <div class="my-6">
                        <h3
                            class="text-xl font-semibold text-center text-white dark:text-neutral-300 dark:group-hover:text-white">
                            {{ $item->instructor_name }}
                        </h3>
                        <p class="mt-5 text-center text-white dark:text-neutral-400">
                            {{ $item->course_name }}
                        </p>
                    </div>
                    <h5 class="text-xl text-center text-white dark:text-neutral-200">{{ $item->total_addmission }}</h5>
                    <h5 class="text-xl text-center text-white dark:text-neutral-200">TOTAL ADMISSION</h5>

                </a>
                <!-- End Card -->
            @endforeach
        </div>
        <!-- End Grid -->
        <!-- End Grid -->

        <h4 class="my-10 text-2xl font-bold text-center md:text-4xl md:leading-tight dark:text-white">Top 15 courses​
        </h4>

        <!-- Card -->
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div
                        class="overflow-hidden bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700">

                        <!-- Table -->
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                            <thead class="bg-gray-50 dark:bg-neutral-800">
                                <tr>
                                    <th scope="col" class="py-3 ps-6 text-start">
                                        <label for="hs-at-with-checkboxes-main" class="flex">
                                            <span class="sr-only"></span>
                                        </label>
                                    </th>
                                    <th scope="col" class="py-3 ps-6 lg:ps-3 xl:ps-0 pe-6 text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-sm font-semibold tracking-wide text-gray-800 uppercase dark:text-neutral-200">
                                                No.
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-sm font-semibold tracking-wide text-gray-800 uppercase dark:text-neutral-200">
                                                INSTRUCTOR'S NAME
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-sm font-semibold tracking-wide text-gray-800 uppercase dark:text-neutral-200">
                                                COURSE NAME
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-sm font-semibold tracking-wide text-gray-800 uppercase dark:text-neutral-200">
                                                DAILY ADMISSION
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-sm font-semibold tracking-wide text-gray-800 uppercase dark:text-neutral-200">
                                                TOTAL ADMISSION
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-end"></th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                @foreach ($participants as $participant)
                                    <tr>
                                        <td class="size-px whitespace-nowrap">
                                            <div class="py-3 ps-6">
                                                <label for="hs-at-with-checkboxes-1" class="flex">
                                                    <span class="sr-only"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td class="size-px whitespace-nowrap">
                                            <div class="py-3 ps-9 lg:ps-3 xl:ps-0 pe-6">
                                                <div class="flex items-center gap-x-3">
                                                    <div class="grow">
                                                        <span
                                                            class="block font-semibold text-gray-800 text-md dark:text-neutral-200">0{{ $loop->index + 1 }}.</span>

                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="size-px whitespace-nowrap">
                                            <div class="py-3 ps-6 lg:ps-3 xl:ps-0 pe-6">
                                                <div class="flex items-center gap-x-4">
                                                    <div class="grow">
                                                        <span
                                                            class="px-5 font-semibold text-gray-800 text-md spacblock dark:text-neutral-200">{{ $participant->instructor_name }}</span>

                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="h-px w-72 whitespace-nowrap">
                                            <div class="px-6 py-3">
                                                <span
                                                    class="block font-semibold text-gray-800 text-md dark:text-neutral-200">{{ $participant->course_name }}</span>

                                            </div>
                                        </td>
                                        <td class="h-px w-72 whitespace-nowrap">
                                            <div class="px-6 py-3">
                                                <span
                                                    class="block font-semibold text-gray-800 text-md dark:text-neutral-200">{{ $participant->daily_addmission }}</span>

                                            </div>
                                        </td>
                                        <td class="h-px w-72 whitespace-nowrap">
                                            <div class="px-6 py-3">
                                                <span
                                                    class="block font-semibold text-gray-800 text-md dark:text-neutral-200">{{ $participant->total_addmission }}</span>

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <!-- End Table -->

                    </div>
                </div>
            </div>
        </div>
        <!-- End Card -->

    </div>
    <!-- End Team -->
</body>

</html>
