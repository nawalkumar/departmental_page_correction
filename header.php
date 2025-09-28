<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ucfirst(htmlspecialchars($_GET['dept'] ?? 'cse', ENT_QUOTES, 'UTF-8')); ?> Department</title>
    <script src="../assets/js/tailwind.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        html,
        body {
            width: 100%;
            overflow-x: hidden;
            margin: 0;
            padding: 0;
        }

        .professor-image {
            width: 150px;
            height: 150px;
            object-fit: cover;
            object-position: center;
            margin-bottom: 0.75rem;
            border: none;
            border-radius: 0;
        }

        .empty-image {
            width: 150px;
            height: 150px;
            background-color: #f3f4f6;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 0.75rem;
            border: none;
            border-radius: 0;
        }

        #menu {
            z-index: 50;
        }

        /* Ensure menu takes full width and red background on mobile */
        @media (max-width: 1023px) {
            #menu {
                background-color: rgb(153, 27, 27);
                /* Tailwind's red-800 */
                width: 100%;
                position: absolute;
                top: 5rem;
                /* Adjust based on header height */
                left: 0;
                transition: transform 0.3s ease-in-out;
                transform: translateY(-100%);
            }

            #menu.show {
                transform: translateY(0);
            }

            /* Push content below when menu is open */
            .content-wrapper {
                transition: margin-top 0.3s ease-in-out;
                margin-top: 0;
            }

            #menu.show~.content-wrapper {
                /* Dynamically set in JavaScript to match menu height */
                margin-top: 0;
                /* Initial placeholder, updated by JS */
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<?php
include "../../../render/root.php";
$dept = filter_input(INPUT_GET, 'dept', FILTER_SANITIZE_STRING) ?? 'cse';

$labs = [
    'cse' => ['computing', 'computerNetworks', 'dataScience', 'simulations', 'advancedComputing'],
    'ece' => ['electronicDevicesandCircuitslab', 'digitalElectronicsLab', 'EmbeddedSystemsLab', 'microprocessorAndMicrocontrollerLab'],
    'eee' => ['basicElectricalEngineeringLaboratory', 'measurementLaboratory', 'controlSystemsLaboratory', 'electricalMachinesLaboratory'],
    'me' => ['engineeringGraphicsLab', 'advancedManufacturingLab', 'conversionLab', 'solidMechanicsLab'],
    'ce' => ['surveyinglab', 'materialtestinglab', 'geotechnicallab', 'environmentallab'],
    'physics' => ['engineeringPhysicsLab'],
    'humanities' => ['englishlab']
];

$selectedLabs = $labs[$dept] ?? [];

function formatLabName($lab)
{
    $words = preg_split('/(?=[A-Z])|(?<=[a-z])(?=[A-Z])/', $lab, -1, PREG_SPLIT_NO_EMPTY);
    $formatted = array_map('ucfirst', $words);
    return implode(' ', $formatted);
}
?>

<body class="bg-white">
    <header class="w-full h-20 bg-red-800 fixed top-0 z-50">
        <nav class="w-full h-full">
            <div class="container mx-auto flex justify-between items-center h-full px-4">
                <div class="absolute top-4 right-4 lg:hidden">
                    <button id="menu-btn" class="text-white text-2xl focus:outline-none">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>

                <ul id="menu"
                    class="hidden lg:flex text-white text-lg bg-red-900 lg:bg-transparent absolute lg:static top-20 left-0 w-full lg:w-auto flex-col lg:flex-row p-4 lg:p-0">
                    <li class="group relative text-center lg:w-[200px]">
                        <a href="../../../render/index.php?section=home&dept=<?php echo urlencode($dept); ?>"
                            class="block px-9 py-7 text-lg text-white hover:bg-red-900 transition-all duration-300 relative">
                            Home
                            <span
                                class="absolute bottom-0 left-0 w-0 h-[3px] bg-yellow-400 transition-all duration-300 group-hover:w-full"></span>
                        </a>
                        <span class="absolute top-0 left-0 h-[97%] w-[4px] bg-gray-800 hidden lg:block"></span>
                    </li>

                    <li class="group relative text-center lg:w-[200px]">
                        <a href="../../../render/index.php?section=academics&dept=<?php echo urlencode($dept); ?>"
                            class="block px-9 py-7 text-lg text-white hover:bg-red-900 transition-all duration-300 relative">
                            Academics
                            <span
                                class="absolute bottom-0 left-0 w-0 h-[3px] bg-yellow-400 transition-all duration-300 group-hover:w-full"></span>
                        </a>
                        <span class="absolute top-0 left-0 h-[97%] w-[4px] bg-gray-800 hidden lg:block"></span>
                    </li>
                    <li class="group relative text-center lg:w-[200px]">
                        <a href="../../../render/index.php?section=academics&dept=<?php echo urlencode($dept); ?>"
                            class="block px-9 py-7 text-lg text-white hover:bg-red-900 transition-all duration-300 relative">
                            People
                            <span
                                class="absolute bottom-0 left-0 w-0 h-[3px] bg-yellow-400 transition-all duration-300 group-hover:w-full"></span>
                        </a>
                        <span class="absolute top-0 left-0 h-[97%] w-[4px] bg-gray-800 hidden lg:block"></span>
                        <ul class="absolute 
    sm:left-1/2 sm:-translate-x-1/2 
    lg:left-0 lg:translate-x-0
    text-center hidden bg-red-700 border-2 border-red-600 
    rounded-tr-3xl w-80 group-hover:block transition-all duration-300 
    z-50 p-2 lg:mt-0 pointer-events-auto">
                            <li>
                                <a href="../people.php?section=fac&dept=<?php echo urlencode($dept); ?>"
                                    class="block px-4 py-2 text-white hover:bg-red-900 whitespace-normal text-left rounded">
                                    Faculty
                                </a>
                            </li>
                            <li>
                                <a href="../people.php?section=res&dept=<?php echo urlencode($dept); ?>"
                                    class="block px-4 py-2 text-white hover:bg-red-900 whitespace-normal text-left rounded">
                                    Researcher
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="group relative text-center lg:w-[200px]">
                        <a href="../../../render/facilities/facilities.php?dept=<?php echo urlencode($dept); ?>"
                            class="block px-9 py-7 text-lg text-white hover:bg-red-900 transition-all duration-300 relative">
                            Facilities
                            <span
                                class="absolute bottom-0 left-0 w-0 h-[3px] bg-yellow-400 transition-all duration-300 group-hover:w-full"></span>
                        </a>
                        <span class="absolute top-0 left-0 h-[97%] w-[4px] bg-gray-800 hidden lg:block"></span>

                        <ul class="absolute 
    sm:left-1/2 sm:-translate-x-1/2 
    lg:left-0 lg:translate-x-0
    text-center hidden bg-red-700 border-2 border-red-600 
    rounded-tr-3xl w-80 group-hover:block transition-all duration-300 
    z-50 p-2 lg:mt-0 pointer-events-auto">
                            <?php foreach ($selectedLabs as $lab): ?>
                                <li>
                                    <a href="../../../render/facilities/<?php echo urlencode($dept); ?>.php?dept=<?php echo urlencode($dept); ?>&section=<?php echo urlencode($lab); ?>"
                                        class="block px-4 py-2 text-white hover:bg-red-900 whitespace-normal text-left rounded">
                                        <?php echo htmlspecialchars(formatLabName($lab), ENT_QUOTES, 'UTF-8'); ?> Lab
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <li class="group relative text-center lg:w-[200px]">
                        <a href="../../../render/index.php?section=researcher&dept=<?php echo urlencode($dept); ?>"
                            class="block px-9 py-7 text-lg text-white hover:bg-red-900 transition-all duration-300 relative">
                            Research
                            <span
                                class="absolute bottom-0 left-0 w-0 h-[3px] bg-yellow-400 transition-all duration-300 group-hover:w-full"></span>
                        </a>
                        <span class="absolute top-0 left-0 h-[97%] w-[4px] bg-gray-800 hidden lg:block"></span>
                    </li>

                    <li class="group relative text-center lg:w-[200px]">
                        <a href="../../../render/index.php?section=event&dept=<?php echo urlencode($dept); ?>"
                            class="block px-9 py-7 text-lg text-white hover:bg-red-900 transition-all duration-300 relative">
                            Event
                            <span
                                class="absolute bottom-0 left-0 w-0 h-[3px] bg-yellow-400 transition-all duration-300 group-hover:w-full"></span>
                        </a>
                        <span class="absolute top-0 left-0 h-[97%] w-[4px] bg-gray-800 hidden lg:block"></span>
                        <span class="absolute top-0 right-0 h-[97%] w-[4px] bg-gray-800 hidden lg:block"></span>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <script>
        document.getElementById("menu-btn").addEventListener("click", function () {
            let menu = document.getElementById("menu");
            let contentWrapper = document.querySelector(".content-wrapper");
            menu.classList.toggle("hidden");
            menu.classList.toggle("show");

            // Toggle hamburger to close icon
            let icon = this.querySelector("i");
            icon.classList.toggle("fa-bars");
            icon.classList.toggle("fa-times");

            // Dynamically adjust content-wrapper margin-top based on menu height
            if (menu.classList.contains("show")) {
                // Calculate menu height including padding
                const menuHeight = menu.offsetHeight;
                // Header height is 5rem (80px), so total offset is header + menu height
                contentWrapper.style.marginTop = `${menuHeight + 10}px`;
            } else {
                contentWrapper.style.marginTop = "0";
            }
        });

        // Adjust margin on window resize to handle dynamic menu height changes
        window.addEventListener("resize", function () {
            let menu = document.getElementById("menu");
            let contentWrapper = document.querySelector(".content-wrapper");
            if (menu.classList.contains("show") && window.innerWidth < 1024) {
                const menuHeight = menu.offsetHeight;
                contentWrapper.style.marginTop = `${menuHeight + 10}px`;
            } else {
                contentWrapper.style.marginTop = "0";
            }
        });
    </script>



    <div class="content-wrapper flex justify-center md:items-center md:ml-4 lg:mr-32 pt-20">
        <div class="flex justify-center items-center py-10 sm:px-4 ml-0 sm:ml-24">
            <div id="header" class="flex flex-col md:flex-row items-center md:items-start gap-4 max-w-4xl w-full">
                <div class="w-20 flex items-center">
                    <a href="../../../../index.php">
                        <img src="../../../assets/images/logo.png" alt="Logo"
                            class="w-full h-auto max-h-24 object-contain">
                    </a>
                </div>
                <div class="flex flex-col text-center md:text-left">
                    <h2 class="text-xl font-semibold">
                        <?php echo htmlspecialchars($titleHindi ?? '', ENT_QUOTES, 'UTF-8'); ?>
                    </h2>
                    <h2 class="text-xl font-semibold">
                        <?php echo htmlspecialchars($titleEnglish ?? '', ENT_QUOTES, 'UTF-8'); ?>
                    </h2>
                    <p class="text-lg text-gray-700">
                        <?php echo htmlspecialchars($subtitle ?? '', ENT_QUOTES, 'UTF-8'); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>