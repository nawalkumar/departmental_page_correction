<?php include "../header.php" ?>

<body class="bg-gray-100">

    <div class="bg-white rounded-lg gap-3 flex flex-col max-w-7xl mx-auto">
        <div class="white ">
            <div class="p-0">
                <div id="header" class="flex items-center"></div>
                <div class="flex items-center">
                    <i class=" fa fa-user text-gray-400"></i>
                    <div id="breadcrumb" class="text-red-900 text-sm font-medium ml-2">People</div>
                </div>
                <hr class="border-t-4 border-yellow-600 w-full mb-1">
            </div>
        </div>
        <div class="projects flex flex-col items-center w-full gap-5">
            <div class="rounded-xl w-full border-2 border-gray-200 shadow-md">

                <div class="flex flex-col items-center min-h-screen p-6">
                    <div class="flex justify-center items-center p-4">
                        <div
                            class="w-fit h-fit p-2 border-r-2 border-l-0 border border-red-700 rounded-l-full rounded-r-full shadow-lg font-bold text-base md:text-lg">
                            Institute Research Scholars (Full Time)</div>
                    </div>
                    <div id="fullTimeContainer"
                        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 justify-center p-4 w-full max-w-6xl">
                    </div>

                    <div class="flex justify-center items-center p-4">
                        <div
                            class="w-fit h-fit p-2 border-r-2 border-l-0 border border-red-700 rounded-l-full rounded-r-full shadow-lg font-bold text-base md:text-lg">
                            Institute Research Scholars (Under Various Projects/Schemes)</div>
                    </div>
                    <div id="projectContainer"
                        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 justify-center p-4 w-full max-w-6xl">
                    </div>
                    <div class="flex justify-center items-center p-4">
                        <div
                            class="w-fit h-fit p-2 border-r-2 border-l-0 border border-red-700 rounded-l-full rounded-r-full shadow-lg font-bold text-base md:text-lg">
                            Institute Research Scholars (Part Time)</div>
                    </div>
                    <div id="projectContainer2"
                        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 justify-center p-4 w-full max-w-6xl">
                    </div>
                    <div class="flex justify-center items-center p-4">
                        <div
                            class="w-fit h-fit p-2 border-r-2 border-l-0 border border-red-700 rounded-l-full rounded-r-full shadow-lg font-bold text-base md:text-lg">
                            Awarded</div>
                    </div>
                    <div id="projectContainer3"
                        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 justify-center p-4 w-full max-w-6xl">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const professorData = {
            "fullTime": [
                {
                    "name": "Ms. Srijana Subba",
                    "email": "phch170002@nitsikkim.ac.in",
                    "phone": "+91 7076334588",
                    "research_interest": "Synthesis of Natural Products",
                    "image": "./img/phch170002@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Sumit Saha"
                },
                  {
                    "name": "Mr. Srijan Narayan Chowdhury",
                    "email": "srijannarayanchowdhury@gmail.com",
                    "phone": "+91 8961431797",
                    "research_interest": "Reductive Activation of Dioxygen, Bioinspired Catalysis",
                    "image": "./img/srijannarayanchowdhury@gmail.com.jpg",
                    "Supervisor": "Dr. Achintesh N Biswas"
                },
                  {
                    "name": "Mr. Ramananda Das",
                    "email": "ramananddas1550@gmail.com",
                    "phone": "+91-9706594176",
                    "research_interest": "Photoredox mediated Organic Transformations",
                    "image": "./img/ramananddas1550@gmail.com.jpg",
                    "Supervisor": "Dr. Taraknath Kundu"
                },
                  {
                    "name": "Mr. Ravan Kumar",
                    "email": "phch210016@nitsikkim.ac.in",
                    "phone": "+91 8607799121",
                    "research_interest": "Synthesis of Natural Products",
                    "image": "./img/phch210016@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Sumit Saha"
                },
                  {
                    "name": "Ms. Malati Das",
                    "email": "malatidas45@gmail.com",
                    "phone": "+91 9091538939",
                    "research_interest": "Photoredox mediated C-H bond Activation",
                    "image": "./img/malatidas45@gmail.com.jpg",
                    "Supervisor": "Dr. Taraknath Kundu"
                },
                  {
                    "name": "Mr. Panjo Lepcha",
                    "email": "phch180005@nitsikkim.ac.in",
                    "phone": "+91-8509509222",
                    "research_interest": "Molecular catalysts for Water Oxidation",
                    "image": "./img/phch180005@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Achintesh N Biswas"
                },
                  {
                    "name": "Mr. Saikat Das",
                    "email": "mailsaikatdas@gmail.com",
                    "phone": "+91 8116845110",
                    "research_interest": "High-valent oxometal complexes; Degradation of Micropollutants",
                    "image": "./img/mailsaikatdas@gmail.com.jpg",
                    "Supervisor": "Dr. Achintesh N Biswas"
                }
            ],
            "projectBased": [
                
            ],
            "projectBased2": [
            ],
            "projectBased3": [
                {
                    "name": "Dr. Sachidulal Biswas",
                    "email": "",
                    "phone": "",
                    "Thesis": "Biomimetic Metal Complexes for C-H Activation and Water Oxidation",
                    "image": "./img/Dr. Sachidulal Biswas.jpg",
                    "Supervisor": "Dr. Achintesh N Biswas",
                    "Defence_Date": " 2021",
                }
            ]
        };

        function generateProfessorCard(professor) {
            const imageContent = professor.image
                ? `<div class="flex justify-center"><img src="${professor.image}" alt="${professor.name}" class="professor-image"></div>`
                : `<div class="flex justify-center"><div class="empty-image"><span class="text-gray-500">No Image</span></div></div>`;

            return `
            <div class="border-2 border-red-700 rounded-lg p-6 shadow-md bg-white professor-card">
                ${imageContent}
                <h2 class="text-lg font-bold text-center">${professor.name}</h2>
                <div class="text-center">
                    <p class="text-sm text-gray-500">${professor.email}</p>
                    <p class="text-sm text-gray-500">${professor.phone || 'Not provided'}</p>
                    <p class="text-xs text-gray-400 mt-2">Research Interest: ${professor.research_interest}</p>
                    <p class="text-sm text-gray-600 mt-1">Supervisor: ${professor.Supervisor}</p>
                </div>
            </div>
        `;
        }

        function generateProfessorCard2(professor) {
            const imageContent = professor.image
                ? `<div class="flex justify-center"><img src="${professor.image}" alt="${professor.name}" class="professor-image"></div>`
                : `<div class="flex justify-center"><div class="empty-image"><span class="text-gray-500">No Image</span></div></div>`;

            return `
            <div class="border-2 border-red-700 rounded-lg p-6 shadow-md bg-white professor-card">
                ${imageContent}
                <h2 class="text-lg font-bold text-center">${professor.name}</h2>
                <div class="text-center">
                    <p class="text-sm text-gray-500">${professor.email}</p>
                    <p class="text-sm text-gray-500">${professor.phone || 'Not provided'}</p>
                    <p class="text-sm text-gray-500 mt-2">Thesis: ${professor.Thesis}</p>
                    <p class="text-sm text-gray-600 mt-1">Supervisor: ${professor.Supervisor}</p>
                    <p class="text-sm text-gray-600 mt-1">Defence Date: ${professor.Defence_Date || 'Not provided'}</p>
                </div>
            </div>
        `;
        }

        function loadProfessorCards(containerId, professors) {
            const container = document.getElementById(containerId);
            container.innerHTML = professors.map(generateProfessorCard).join('');
        }

        function loadProfessorCards2(containerId, professors) {
            const container = document.getElementById(containerId);
            container.innerHTML = professors.map(generateProfessorCard2).join('');
        }

        loadProfessorCards("fullTimeContainer", professorData.fullTime);
        loadProfessorCards("projectContainer", professorData.projectBased);
        loadProfessorCards("projectContainer2", professorData.projectBased2);
        loadProfessorCards2("projectContainer3", professorData.projectBased3);
    </script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .professor-image {
            width: 150px;
            height: 150px;
            object-fit: contain;
            object-position: center;
            margin-bottom: 0.75rem;
            border: none;
            border-radius: 0;
            background-color: transparent;
        }

        .empty-image {
            width: 150px;
            height: 150px;
            background-color: transparent;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 0.75rem;
            border: none;
            border-radius: 0;
        }
    </style>
</body>

<?php include "../footer.php" ?>