<?php
$t = getcwd();
$cnt = substr_count($t, "\\");
$path1 = "";
$cnt -= 3;
while ($cnt--) {
    $path1 = $path1 . "../";
}
?>
<style>
    html,
    body {
        margin: 0;
        padding: 0;
        height: 100%;
        width: 100%;
        overflow-x: hidden;
    }

    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    .content-wrapper {
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    #footer {
        margin-bottom: 0 !important;
        width: 100%;
    }

    .bg-[#3B4356] {
        margin-bottom: 0;
        padding-bottom: 0;
    }

    .skiptranslate {
        display: flex;
        flex-direction: row;
        gap: 10px;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }

    .VIpgJd-ZVi9od-l4eHX-hSRGPd {
        display: flex;
        flex-direction: row;
        align-items: center;
    }

    .VIpgJd-ZVi9od-l4eHX-hSRGPd img {
        width: 50px;
    }

    #goog-gt-tt {
        display: none;
    }

    @media only screen and (max-width: 1024px) {
        .skiptranslate {
            flex-direction: column;
            gap: 6px;
            padding: 8px;
        }

        .VIpgJd-ZVi9od-l4eHX-hSRGPd {
            flex-direction: row;
        }
    }

    @media only screen and (max-width: 639px) {
        .main-footer {
            flex-direction: row !important;
            flex-wrap: wrap !important;
            gap: 16px !important;
            justify-content: center;
        }

        .main-footer .departments {
            width: 100% !important;
            max-width: 400px;
        }

        .main-footer .explore-syllabus,
        .main-footer .people-feedback {
            width: calc(50% - 8px) !important;
            min-width: 140px;
            max-width: 200px;
        }
    }
</style>

<div class="content-wrapper">
    <!-- Main content would go here -->
    <div id="footer" class="h-full mb-0">
        <!-- Top Footer -->
        <div
            class="bg-[#921B1F] text-white flex flex-row justify-around text-[11px] sm:text-base leading-6 py-1 sm:py-2">
            <div class="flex items-center">
                <h2 class="font-medium">On Campus:
                    <img src="<?php echo $path1 . 'assets/icons/rain.png'; ?>"
                        class="inline-flex w-6 h-6 md:w-8 md:h-8 ml-1" alt="Weather Icon">
                </h2>
            </div>
            <div class="flex flex-row justify-evenly gap-2 sm:gap-4">
                <div class="sm:mx-2">
                    <h2>Temp: <span id="temp">19</span>°C</h2>
                </div>
                <div class="sm:mx-2">
                    <h2>Humidity: <span id="humidity">81</span>%</h2>
                </div>
                <div class="sm:mx-2">
                    <h2>Wind: <span id="wind">8</span> km/h</h2>
                </div>
            </div>
        </div>
        <!-- Main Footer -->
        <div class="flex flex-col sm:flex-row w-full">
            <div class="bg-[#202331] sm:w-3/10 py-4 sm:py-12 px-4 sm:px-12">
                <div class="flex justify-center p-2 sm:p-3">
                    <img src="<?php echo $path1 . 'assets/icons/logo.jpg'; ?>" alt="NIT Sikkim"
                        class="w-20 sm:w-28 md:w-32 rounded-full border-4 border-white">
                </div>
                <div class="text-white text-center px-2 sm:px-4">
                    <h2 class="text-lg sm:text-xl md:text-2xl font-semibold">
                        <?php echo htmlspecialchars($titleHindi ?? '', ENT_QUOTES, 'UTF-8'); ?>
                    </h2>
                    <div class="text-sm sm:text-base md:text-lg my-1 sm:my-2">
                        <h2><?php echo htmlspecialchars($titleEnglish ?? '', ENT_QUOTES, 'UTF-8'); ?></h2>
                    </div>
                    <div class="flex justify-center">
                        <div class="py-1 sm:py-2 space-y-3 sm:space-y-4">
                            <!-- Phone -->
                            <div class="flex items-center gap-2 sm:gap-3">
                                <img src="<?php echo htmlspecialchars($phone_icon ?? '', ENT_QUOTES, 'UTF-8'); ?>"
                                    alt="Phone Icon" class="w-5 h-5 sm:w-6 sm:h-6 md:w-7 md:h-7">
                                <h2 class="text-sm sm:text-base md:text-lg font-medium">
                                    <?php echo htmlspecialchars($phone_details ?? '', ENT_QUOTES, 'UTF-8'); ?>
                                </h2>
                            </div>
                            <!-- Email -->
                            <div class="flex items-center gap-2 sm:gap-3">
                                <img src="<?php echo htmlspecialchars($email_icon ?? '', ENT_QUOTES, 'UTF-8'); ?>"
                                    alt="Email Icon" class="w-5 h-5 sm:w-6 sm:h-6 md:w-7 md:h-7">
                                <h2 class="text-sm sm:text-base md:text-lg font-medium">
                                    <?php echo htmlspecialchars($email_details ?? '', ENT_QUOTES, 'UTF-8'); ?>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-2 sm:hidden">
                <hr class="px-2 border-t border-gray-400">
            </div>
            <div class="hidden sm:flex bg-[#202331] items-center">
                <div class="border-r-2 border-dashed border-white h-5/6"></div>
            </div>
            <div
                class="main-footer bg-[#202331] text-white py-4 sm:py-12 flex flex-col sm:flex-row sm:justify-evenly items-start gap-8 sm:gap-12 px-4 sm:px-12 sm:flex-1">
                <!-- Departments Section -->
                <div class="departments flex flex-col w-full sm:w-4/12 px-2 sm:px-4">
                    <h2 class="text-lg sm:text-xl md:text-2xl font-semibold my-2 sm:my-4 mb-2 sm:mb-4">Departments</h2>
                    <ul class="space-y-3">
                        <li class="relative cursor-pointer transition-all duration-500 w-fit whitespace-nowrap
                                   before:content-[''] before:absolute before:-bottom-2 before:left-1/2 
                                   before:-translate-x-1/2 before:w-0 before:h-0.5 before:rounded-full 
                                   before:opacity-0 before:transition-all before:duration-500 
                                   before:bg-gradient-to-r before:from-red-600 before:via-red-400 
                                   before:to-red-500 hover:before:w-full hover:before:opacity-100">
                            <a href="#" class="text-sm sm:text-base">AI Engineering</a>
                        </li>
                        <li class="relative cursor-pointer transition-all duration-500 w-fit whitespace-nowrap
                                   before:content-[''] before:absolute before:-bottom-2 before:left-1/2 
                                   before:-translate-x-1/2 before:w-0 before:h-0.5 before:rounded-full 
                                   before:opacity-0 before:transition-all before:duration-500 
                                   before:bg-gradient-to-r before:from-red-600 before:via-red-400 
                                   before:to-red-500 hover:before:w-full hover:before:opacity-100">
                            <a href="#" class="text-sm sm:text-base">Civil Engineering</a>
                        </li>
                        <li class="relative cursor-pointer transition-all duration-500 w-fit whitespace-nowrap
                                   before:content-[''] before:absolute before:-bottom-2 before:left-1/2 
                                   before:-translate-x-1/2 before:w-0 before:h-0.5 before:rounded-full 
                                   before:opacity-0 before:transition-all before:duration-500 
                                   before:bg-gradient-to-r before:from-red-600 before:via-red-400 
                                   before:to-red-500 hover:before:w-full hover:before:opacity-100">
                            <a href="#" class="text-sm sm:text-base">Computer Science and Engineering</a>
                        </li>
                        <li class="relative cursor-pointer transition-all duration-500 w-fit whitespace-nowrap
                                   before:content-[''] before:absolute before:-bottom-2 before:left-1/2 
                                   before:-translate-x-1/2 before:w-0 before:h-0.5 before:rounded-full 
                                   before:opacity-0 before:transition-all before:duration-500 
                                   before:bg-gradient-to-r before:from-red-600 before:via-red-400 
                                   before:to-red-500 hover:before:w-full hover:before:opacity-100">
                            <a href="#" class="text-sm sm:text-base">Electrical & Electronics Engineering</a>
                        </li>
                        <li class="relative cursor-pointer transition-all duration-500 w-fit whitespace-nowrap
                                   before:content-[''] before:absolute before:-bottom-2 before:left-1/2 
                                   before:-translate-x-1/2 before:w-0 before:h-0.5 before:rounded-full 
                                   before:opacity-0 before:transition-all before:duration-500 
                                   before:bg-gradient-to-r before:from-red-600 before:via-red-400 
                                   before:to-red-500 hover:before:w-full hover:before:opacity-100">
                            <a href="#" class="text-sm sm:text-base">Electronics & Communication Center</a>
                        </li>
                        <li class="relative cursor-pointer transition-all duration-500 w-fit whitespace-nowrap
                                   before:content-[''] before:absolute before:-bottom-2 before:left-1/2 
                                   before:-translate-x-1/2 before:w-0 before:h-0.5 before:rounded-full 
                                   before:opacity-0 before:transition-all before:duration-500 
                                   before:bg-gradient-to-r before:from-red-600 before:via-red-400 
                                   before:to-red-500 hover:before:w-full hover:before:opacity-100">
                            <a href="#" class="text-sm sm:text-base">Mechanical Engineering</a>
                        </li>
                        <li class="relative cursor-pointer transition-all duration-500 w-fit whitespace-nowrap
                                   before:content-[''] before:absolute before:-bottom-2 before:left-1/2 
                                   before:-translate-x-1/2 before:w-0 before:h-0.5 before:rounded-full 
                                   before:opacity-0 before:transition-all before:duration-500 
                                   before:bg-gradient-to-r before:from-red-600 before:via-red-400 
                                   before:to-red-500 hover:before:w-full hover:before:opacity-100">
                            <a href="#" class="text-sm sm:text-base">Mathematics</a>
                        </li>
                        <li class="relative cursor-pointer transition-all duration-500 w-fit whitespace-nowrap
                                   before:content-[''] before:absolute before:-bottom-2 before:left-1/2 
                                   before:-translate-x-1/2 before:w-0 before:h-0.5 before:rounded-full 
                                   before:opacity-0 before:transition-all before:duration-500 
                                   before:bg-gradient-to-r before:from-red-600 before:via-red-400 
                                   before:to-red-500 hover:before:w-full hover:before:opacity-100">
                            <a href="#" class="text-sm sm:text-base">Physics</a>
                        </li>
                        <li class="relative cursor-pointer transition-all duration-500 w-fit whitespace-nowrap
                                   before:content-[''] before:absolute before:-bottom-2 before:left-1/2 
                                   before:-translate-x-1/2 before:w-0 before:h-0.5 before:rounded-full 
                                   before:opacity-0 before:transition-all before:duration-500 
                                   before:bg-gradient-to-r before:from-red-600 before:via-red-400 
                                   before:to-red-500 hover:before:w-full hover:before:opacity-100">
                            <a href="#" class="text-sm sm:text-base">Chemistry</a>
                        </li>
                        <li class="relative cursor-pointer transition-all duration-500 w-fit whitespace-nowrap
                                   before:content-[''] before:absolute before:-bottom-2 before:left-1/2 
                                   before:-translate-x-1/2 before:w-0 before:h-0.5 before:rounded-full 
                                   before:opacity-0 before:transition-all before:duration-500 
                                   before:bg-gradient-to-r before:from-red-600 before:via-red-400 
                                   before:to-red-500 hover:before:w-full hover:before:opacity-100">
                            <a href="#" class="text-sm sm:text-base">Humanities & Social Science</a>
                        </li>
                    </ul>
                </div>
                <!-- Explore and Syllabus Section -->
                <div class="explore-syllabus flex flex-col w-full sm:w-3/12">
                    <h2 class="text-lg sm:text-xl md:text-2xl font-semibold my-2 sm:my-4 mb-2 sm:mb-4">Explore</h2>
                    <ul class="space-y-3">
                        <li class="relative cursor-pointer transition-all duration-500 w-fit
                                   before:content-[''] before:absolute before:-bottom-2 before:left-1/2 
                                   before:-translate-x-1/2 before:w-0 before:h-0.5 before:rounded-full 
                                   before:opacity-0 before:transition-all before:duration-500 
                                   before:bg-gradient-to-r before:from-red-600 before:via-red-400 
                                   before:to-red-500 hover:before:w-full hover:before:opacity-100">
                            <a href="#" class="text-sm sm:text-base">Home Page</a>
                        </li>
                        <li class="relative cursor-pointer transition-all duration-500 w-fit
                                   before:content-[''] before:absolute before:-bottom-2 before:left-1/2 
                                   before:-translate-x-1/2 before:w-0 before:h-0.5 before:rounded-full 
                                   before:opacity-0 before:transition-all before:duration-500 
                                   before:bg-gradient-to-r before:from-red-600 before:via-red-400 
                                   before:to-red-500 hover:before:w-full hover:before:opacity-100">
                            <a href="#" class="text-sm sm:text-base">TEQIP III</a>
                        </li>
                        <li class="relative cursor-pointer transition-all duration-500 w-fit
                                   before:content-[''] before:absolute before:-bottom-2 before:left-1/2 
                                   before:-translate-x-1/2 before:w-0 before:h-0.5 before:rounded-full 
                                   before:opacity-0 before:transition-all before:duration-500 
                                   before:bg-gradient-to-r before:from-red-600 before:via-red-400 
                                   before:to-red-500 hover:before:w-full hover:before:opacity-100">
                            <a href="#" class="text-sm sm:text-base">KIC/Library</a>
                        </li>
                        <li class="relative cursor-pointer transition-all duration-500 w-fit
                                   before:content-[''] before:absolute before:-bottom-2 before:left-1/2 
                                   before:-translate-x-1/2 before:w-0 before:h-0.5 before:rounded-full 
                                   before:opacity-0 before:transition-all before:duration-500 
                                   before:bg-gradient-to-r before:from-red-600 before:via-red-400 
                                   before:to-red-500 hover:before:w-full hover:before:opacity-100">
                            <a href="#" class="text-sm sm:text-base">T&P</a>
                        </li>
                    </ul>
                    <h2 class="text-lg sm:text-xl md:text-2xl font-semibold my-2 sm:my-4 mb-2 sm:mb-4 mt-4 sm:mt-6">
                        Syllabus
                    </h2>
                    <ul class="space-y-3">
                        <li class="relative cursor-pointer transition-all duration-500 w-fit
                                   before:content-[''] before:absolute before:-bottom-2 before:left-1/2 
                                   before:-translate-x-1/2 before:w-0 before:h-0.5 before:rounded-full 
                                   before:opacity-0 before:transition-all before:duration-500 
                                   before:bg-gradient-to-r before:from-red-600 before:via-red-400 
                                   before:to-red-500 hover:before:w-full hover:before:opacity-100">
                            <a href="#" class="text-sm sm:text-base">B.Tech</a>
                        </li>
                        <li class="relative cursor-pointer transition-all duration-500 w-fit
                                   before:content-[''] before:absolute before:-bottom-2 before:left-1/2 
                                   before:-translate-x-1/2 before:w-0 before:h-0.5 before:rounded-full 
                                   before:opacity-0 before:transition-all before:duration-500 
                                   before:bg-gradient-to-r before:from-red-600 before:via-red-400 
                                   before:to-red-500 hover:before:w-full hover:before:opacity-100">
                            <a href="#" class="text-sm sm:text-base">M.Tech</a>
                        </li>
                        <li class="relative cursor-pointer transition-all duration-500 w-fit
                                   before:content-[''] before:absolute before:-bottom-2 before:left-1/2 
                                   before:-translate-x-1/2 before:w-0 before:h-0.5 before:rounded-full 
                                   before:opacity-0 before:transition-all before:duration-500 
                                   before:bg-gradient-to-r before:from-red-600 before:via-red-400 
                                   before:to-red-500 hover:before:w-full hover:before:opacity-100">
                            <a href="#" class="text-sm sm:text-base">PHD</a>
                        </li>
                    </ul>
                </div>
                <!-- People and Feedback Section -->
                <div class="people-feedback flex flex-col w-full sm:w-5/12 px-4 sm:px-[15%]">
                    <h2 class="text-lg sm:text-xl md:text-2xl font-semibold my-2 sm:my-4 mb-2 sm:mb-4">People</h2>
                    <ul class="space-y-3">
                        <li class="relative cursor-pointer transition-all duration-500 w-fit
                                   before:content-[''] before:absolute before:-bottom-2 before:left-1/2 
                                   before:-translate-x-1/2 before:w-0 before:h-0.5 before:rounded-full 
                                   before:opacity-0 before:transition-all before:duration-500 
                                   before:bg-gradient-to-r before:from-red-600 before:via-red-400 
                                   before:to-red-500 hover:before:w-full hover:before:opacity-100">
                            <a href="#" class="text-sm sm:text-base">Faculty</a>
                        </li>
                        <li class="relative cursor-pointer transition-all duration-500 w-fit
                                   before:content-[''] before:absolute before:-bottom-2 before:left-1/2 
                                   before:-translate-x-1/2 before:w-0 before:h-0.5 before:rounded-full 
                                   before:opacity-0 before:transition-all before:duration-500 
                                   before:bg-gradient-to-r before:from-red-600 before:via-red-400 
                                   before:to-red-500 hover:before:w-full hover:before:opacity-100">
                            <a href="#" class="text-sm sm:text-base">Staff</a>
                        </li>
                        <li class="relative cursor-pointer transition-all duration-500 w-fit
                                   before:content-[''] before:absolute before:-bottom-2 before:left-1/2 
                                   before:-translate-x-1/2 before:w-0 before:h-0.5 before:rounded-full 
                                   before:opacity-0 before:transition-all before:duration-500 
                                   before:bg-gradient-to-r before:from-red-600 before:via-red-400 
                                   before:to-red-500 hover:before:w-full hover:before:opacity-100">
                            <a href="#" class="text-sm sm:text-base">Students</a>
                        </li>
                        <li class="relative cursor-pointer transition-all duration-500 w-fit
                                   before:content-[''] before:absolute before:-bottom-2 before:left-1/2 
                                   before:-translate-x-1/2 before:w-0 before:h-0.5 before:rounded-full 
                                   before:opacity-0 before:transition-all before:duration-500 
                                   before:bg-gradient-to-r before:from-red-600 before:via-red-400 
                                   before:to-red-500 hover:before:w-full hover:before:opacity-100">
                            <a href="#" class="text-sm sm:text-base">Alumni</a>
                        </li>
                    </ul>
                    <h2 class="text-lg sm:text-xl md:text-2xl font-semibold my-2 sm:my-4 mb-2 sm:mb-4 mt-4 sm:mt-6">
                        Feedback
                    </h2>
                    <div class="flex flex-col gap-3 my-1 sm:my-2">
                        <button
                            class="w-32 bg-gradient-to-r from-red-600 via-red-400 to-red-500 text-white text-sm font-semibold py-1.5 rounded-lg hover:opacity-90 transition-opacity">
                            Give Feedback
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Links Section -->
        <div class="bg-[#202331] flex flex-row flex-wrap items-center justify-center p-2 sm:p-4 gap-4 sm:gap-6">
            <a href="https://nitsikkim.samarth.ac.in/index.php/site/login">
                <img src="<?php echo $path1 . 'assets/images/samarth.png'; ?>" class="w-[120px] sm:w-[140px]"
                    alt="Samarth">
            </a>
            <a href="https://www.digilocker.gov.in/">
                <img src="<?php echo $path1 . 'assets/images/digilocker.png'; ?>" class="w-[120px] sm:w-[140px]"
                    alt="DigiLocker">
            </a>
            <a href="https://india.gov.in/">
                <img src="<?php echo $path1 . 'assets/images/indiagov.png'; ?>" class="w-[120px] sm:w-[140px]"
                    alt="India Gov">
            </a>
            <div id="google_translate_element" class="flex items-center"></div>
        </div>
        <!-- Copyright Section -->
        <div class="bg-[#3B4356] text-white py-3 sm:py-4 md:h-12 md:pt-3 md:pb-3">
            <div
                class="text-center text-xs sm:text-sm md:text-base sm:flex sm:flex-row sm:justify-evenly sm:items-center">
                <div class="sm:flex sm:flex-row sm:gap-4 sm:items-center">
                    <div>Copyrights © National Institute Of Technology Sikkim <span
                            class="hidden sm:inline">  |  </span>
                    </div>
                    <div>All rights Reserved <span class="hidden sm:inline">  |  </span></div>
                    <div>Credits & Attributions</div>
                </div>
                <div class="mt-1 sm:mt-0">Developed and Maintained by WDC NIT Sikkim</div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo $path1 . 'header/assets/js/footer.js'; ?>"></script>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en'
        }, 'google_translate_element');
    }
</script>
</body>

</html>