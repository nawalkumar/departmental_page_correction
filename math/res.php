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
                        <!-- <div
                            class="w-fit h-fit p-2 border-r-2 border-l-0 border border-red-700 rounded-l-full rounded-r-full shadow-lg font-bold text-base md:text-lg">
                            Institute Research Scholars (Under Various Projects/Schemes)</div>
                    </div> -->
                    <div id="projectContainer"
                        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 justify-center p-4 w-full max-w-6xl">
                    </div>
                    <div class="flex justify-center items-center p-4">
                        <!-- <div
                            class="w-fit h-fit p-2 border-r-2 border-l-0 border border-red-700 rounded-l-full rounded-r-full shadow-lg font-bold text-base md:text-lg">
                            Institute Research Scholars (Part Time)</div>
                    </div> -->
                    <div id="projectContainer2"
                        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 justify-center p-4 w-full max-w-6xl">
                    </div>
                    <div class="flex justify-center items-center p-4">
                            <!-- <div
                                class="w-fit h-fit p-2 border-r-2 border-l-0 border border-red-700 rounded-l-full rounded-r-full shadow-lg font-bold text-base md:text-lg">
                                Awarded</div>
                        </div> -->
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
                    "name": "Nipa Biswas",
                    "email": "phma210012@nitsikkim.ac.in",
                    "phone": "",
                    "research_interest": "Production Planning and Inventory Control",
                    "image": "./img/phma210012@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Om Prakash"
                },
                {
                    "name": "Satyam Guragain",
                    "email": "phma220012@nitsikkim.ac.in",
                    "phone": "",
                    "research_interest": "Spectral Graph Theory",
                    "image": "./img/phma220012@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Ravi Srivastava"
                },
                {
                    "name": "Bishal Sonar",
                    "email": "phma230001@nitsikkim.ac.in",
                    "phone": "",
                    "research_interest": "Spectral Graph Theory",
                    "image": "./img/phma230001@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Ravi Srivastava"
                },
                 {
                    "name": "Shubham Priyadarshi",
                    "email": "phma230002@nitsikkim.ac.in",
                    "phone": "",
                    "research_interest": "Operations Research",
                    "image": "./img/phma230002@nitsikkim.ac.in.png",
                    "Supervisor": "Dr Om Prakash"
                },

            ],
            "projectBased": [
                {
                    "name": "Kundan Kanti Saha",
                    "email": "phcs210019@nitsikkim.ac.in",
                    "phone": "+91-7044081282",
                    "research_interest": "Computer Networks",
                    "image": "./img/phcs210019@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Sangram Ray"
                }
            ],
            "projectBased2": [
                {
                    "name": "Mr. Dhananjay Kumar",
                    "email": "phcs190001@nitsikkim.ac.in",
                    "phone": "+91-9646991688",
                    "research_interest": "Development of Content Centric Network (CCN) Architecture and Communication Protocols using Elliptic Curve Cryptography (ECC)",
                    "image": "./img/phcs190001@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Sangram Ray"
                },
                {
                    "name": "Gajendra Singh Shekhawat",
                    "email": "phcs220003@nitsikkim.ac.in",
                    "phone": "+91-9046157761",
                    "research_interest": "Software Defined Networking",
                    "image": "./img/gshekhawat@nitsikkim.ac.in.jpg",
                    "Supervisor": "Prof. M.C. Govil,Dr. Pratyay Kuila ,Dr. Ajay Nehra"
                }
            ],
            "projectBased3": [
                {
                    "name": "Dr.Tarun Biswas",
                    "email": "tarun.cse@nitsikkim.ac.in",
                    "phone": "",
                    "Thesis": "Multi-Criteria Workflow Scheduling Based on Nature-Inspired Alogrithms for Heterogeneous Computing System",
                    "image": "./img/tarun.cse@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Pratyay Kuila, Dr. Anjan Kumar Ray",
                    "Defence_Date": "20th October 2020",
                },
                {
                    "name": "Dr. Banavath Balaji Naik",
                    "email": "balajinaik07@nitsikkim.ac.in",
                    "phone": "",
                    "Thesis": "Swarm Inspired Meta Heuristics Algorithm for Multi-Criteria Workflow Scheduling in Cloud Computing",
                    "image": "./img/balajinaik07@nitsikkim.ac.in.jpg",
                    "Supervisor": "Prof. Arun Barun Samaddar, Prof. Dhananjay Singh and Dr. Pratyay Kuila",
                    "Defence_Date": "8th March 2021",
                },
                {
                    "name": "Dr.Gopa Bhaumik",
                    "email": "gopa.bhaumik09@nitsikkim.ac.in",
                    "phone": "",
                    "Thesis": "Development of Conventional and Deep learning Techniques for Effective Hand Gesture Recognition",
                    "image": "./img/gopa.bhaumik09@nitsikkim.ac.in.jpg",
                    "Supervisor": "Prof. Mahesh Chandra Govil,Dr. Santosh Kumar",
                    "Defence_Date": "29th May 2021",
                },
                {
                    "name": "Dr.Sarfaraj Alam Ansari",
                    "email": "sarfaraj@nitsikkim.ac.in",
                    "phone": "+91-9332342995",
                    "Thesis": "Characterization of Peer-to-Pree Trafic and Efficent Handling of Peers Demeanor in live Steaming",
                    "image": "./img/sarfaraj@nitsikkim.ac.in.jpg",
                    "Supervisor": "Prof. Mahesh Chandra Govil,Dr. Kunwar Pal",
                    "Defence_Date": " 16th June 2021",
                },
                {
                    "name": "Dr.Pankaj Kumar Keserwani",
                    "email": "pankajkeserwani.cse@nitsikkim.ac.in",
                    "phone": "+91-8967067779",
                    "Thesis": "Development of Approaches for Ad Click Fraud and Network Instrusion Detection",
                    "image": "./img/pankajkeserwani.cse@nitsikkim.ac.in.jpg",
                    "Supervisor": "Prof. Mahesh Chandra Govil, Dr. Pilli Emmanuel Shubhakar",
                    "Defence_Date": "17th June 2021",
                },
                {
                    "name": "Dr.Subhash Harizan",
                    "email": "phcs16019@nitsikkim.ac.in",
                    "phone": "",
                    "Thesis": "Evolutionary Algorithms for Multi- Constraints Coverage and Connectity Problems in Wireless Sensor Network",
                    "image": "./img/phcs16019@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Pratyay Kuila",
                    "Defence_Date": "8th March 2022",
                },
                {
                    "name": "Dr.Sharmistha Adhikari",
                    "email": "phcs16003@nitsikkim.ac.in",
                    "phone": "",
                    "Thesis": "Content Centric Network (CCN): Its Security Aspects and Design of Some Security Solutions Using Elliptic Curve Cryptography (ECC)",
                    "image": "./img/phcs16003@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Sangram Ray",
                    "Defence_Date": "30th March 2022",
                },
                {
                    "name": "Dr. Suman Majumder",
                    "email": "phcs16004@nitsikkim.ac.in",
                    "phone": "+91 8927257899",
                    "Thesis": " Internet of Things, its security aspects & some proposed security solutions",
                    "image": "./img/phcs16005@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Sangram Ray",
                    "Defence_Date": "",
                },
                {
                    "name": "Dr. Pintu Kumar Ram",
                    "email": "phcs17002@nitsikkim.ac.in",
                    "phone": "+91-7363033431",
                    "Thesis": "Machine Learning",
                    "image": "./img/phcs17002@nitsikkim.ac.in.jpg",
                    "Supervisor": " Dr. Pratyay Kuila",
                    "Defence_Date": "",
                },
                {
                    "name": "Dr. Dipanwita Sadhukhan",
                    "email": "phcs17005@nitsikkim.ac.in",
                    "phone": "",
                    "Thesis": "Cryptography and Network Security",
                    "image": "./img/phcs17005@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Sangram Ray",
                    "Defence_Date": "",
                },
                {
                    "name": "Dr. Uddalak Chatterjee",
                    "email": "uddalak.udi@gmail.com",
                    "phone": "+91 8981057802",
                    "Thesis": "Elliptic curve cryptography (ECC) based key management of Internet of things (IOT)",
                    "image": "./img/uddalak@nitsikkim.ac.in.jpg",
                    "Supervisor": "Dr. Sangram Ray",
                    "Defence_Date": "",
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
        // loadProfessorCards("projectContainer", professorData.projectBased);
        // loadProfessorCards("projectContainer2", professorData.projectBased2);
        // loadProfessorCards2("projectContainer3", professorData.projectBased3);
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