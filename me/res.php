<?php include "../header.php"; ?>

<body class="bg-gray-100">

  <div class="bg-white rounded-lg gap-3 flex flex-col max-w-7xl mx-auto">
    <div class="white ">
      <div class="p-0">
        <div id="header" class="flex items-center"></div>
        <div class="flex items-center">
          <i class="fa fa-user text-gray-400"></i>
          <div id="breadcrumb" class="text-red-900 text-sm font-medium ml-2">People</div>
        </div>
        <hr class="border-t-4 border-yellow-600 w-full mb-1">
      </div>
    </div>

    <div class="projects flex flex-col items-center w-full gap-5">
      <div class="rounded-xl w-full border-2 border-gray-200 shadow-md">

        <div class="flex flex-col items-center min-h-screen p-6">
          <div class="flex justify-center items-center p-4">
            <div class="w-fit h-fit p-2 border-r-2 border-l-0 border border-red-700 rounded-l-full rounded-r-full shadow-lg font-bold text-base md:text-lg">
              Institute Research Scholars
            </div>
          </div>
          <div id="fullTimeContainer" class="w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 p-4"></div>
          <div class="flex justify-center items-center p-4 mt-6">
            <div class="w-fit h-fit p-2 border-r-2 border-l-0 border border-red-700 rounded-l-full rounded-r-full shadow-lg font-bold text-base md:text-lg">
              Research Scholars (Ph.D Awarded)
            </div>
          </div>
          <div id="projectContainer" class="w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 p-4"></div>

        </div>
      </div>
    </div>
  </div>

  <script>
    const professorData = {
      "Institute Research Scholars": [
        {
          "name": "Debayan Mandal",
          "email": "phme220011@nitsikkim.ac.in",
          "phone": "+91 7501755854",
          "research_interest": "Tribological Analysis of Composite Materials",
          "image": "./img/phme220011@nitsikkim.ac.in.jpg",
          "Supervisor": "Dr. Ranjan Basak"
        },
        {
          "name": "Ved Prakash Mishra",
          "email": "phme220010@nitsikkim.ac.in",
          "phone": "+91 6001847816",
          "research_interest": "Biofuels, IC engine, Thermal Analysis and Waste Heat recovery",
          "image": "./img/phme220010@nitsikkim.ac.in.jpg",
          "Supervisor": "Dr. Shambhunath Barman"
        },
        {
          "name": "Mannu Yadav",
          "email": "phme230011@nitsikkim.ac.in",
          "phone": "+91 8294478833",
          "research_interest": "Investigations on flow over protruding objects, FDM, CFD, Dynamics of Vortexes and interactions",
          "image": "./img/phme230011@nitsikkim.ac.in.jpg",
          "Supervisor": "Dr. Anil Lal S, Dr. Shambhunath Barman"
        },
        {
          "name": "Moumita Roy",
          "email": "phme230012@nitsikkim.ac.in",
          "phone": "+91 7432933044",
          "research_interest": "Modeling and Simulation of Thermal System / Alternative Fuel",
          "image": "./img/phme230012@nitsikkim.ac.in.jpg",
          "Supervisor": "Dr. Shambhunath Barman, Dr. Prakash Chandra Roy"
        },
        {
          "name": "Md Shadab Reza",
          "email": "phme230037@nitsikkim.ac.in",
          "phone": "+91 8709601031",
          "research_interest": "IC Engine, Exhaust Emission & Control",
          "image": "./img/phme230037@nitsikkim.ac.in.jpg",
          "Supervisor": "Dr. Jai Gopal Gupta , Dr. Anil Lal S"
        },
        {
          "name": "Debojit Roy",
          "email": "phme230036@nitsikkim.ac.in",
          "phone": "+91 8927538838",
          "research_interest": "Metal-Matrix Composites, Tribology, Optimization Techniques",
          "image": "./img/phme230036@nitsikkim.ac.in.jpg",
          "Supervisor": "Dr. Ranjan Basak"
        }
      ],
      "Research Scholars(Ph.D Awarded)": [
        {
          "name": "Dr. Anwesh Virkunwar",
          "email": "Phme15011@nitsikkim.ac.in",
          "phone": "+91 9421866482",
          "research_interest": "Composite Materials, Material Science & Metallurgy, Finite Element Analysis",
          "image": "./img/phme15011@nitsikkim.ac.in.jpg",
          "Supervisor": "Dr. Ranjan Basak"
        },
        {
          "name": "Dr. Prasan Ralph Dewan",
          "email": "phme16003@nitsikkim.ac.in/prasandewan@gmail.com",
          "phone": "+91 9635280464",
          "research_interest": "Advanced machining processes, Composites",
          "image": "./img/phme16003@nitsikkim.ac.in.jpg",
          "Supervisor": "Dr. Ranjan Basak"
        },
        {
          "name": "Dr. Lakshman R",
          "email": "",
          "phone": "+91 8089276705",
          "research_interest": "Atmospheric boundary layer, Fluids, CFD, OpenFOAM",
          "image": "./img/8089276705.jpg",
          "Supervisor": "Dr Ranjan Basak"
        },
        {
          "name": "Dr. Saddam Hossain Mullick",
          "email": "",
          "phone": "+91 9674651908/9564312834",
          "research_interest": "Thermal Analysis, CFD, Natural Convection",
          "image": "./img/9674651908.jpg",
          "Supervisor": "Dr. Ranjan Basak"
        }
      ]
    };

    function generateProfessorCard(professor) {
      const imageContent = professor.image
        ? `<div class="flex justify-center"><img src="${professor.image}" alt="${professor.name}" class="professor-image rounded-full"></div>`
        : `<div class="flex justify-center"><div class="empty-image rounded-full"><span class="text-gray-500">No Image</span></div></div>`;

      const research = professor.research_interest || professor.researchInterest || '';
      const thesis = professor.Thesis || professor.thesis || '';
      const defence = professor.Defence_Date || professor.defence_date || professor.DefenceDate || '';

      return `
        <div class="border-2 border-red-700 rounded-lg p-6 shadow-md bg-white professor-card">
          ${imageContent}
          <h2 class="text-lg font-bold text-center">${professor.name}</h2>
          <div class="text-center">
            <p class="text-sm text-gray-500">${professor.email || ''}</p>
            <p class="text-sm text-gray-500">${professor.phone || 'Not provided'}</p>
            ${research ? `<p class="text-xs text-gray-400 mt-2">Area(s) of Research: ${research}</p>` : ''}
            ${thesis ? `<p class="text-sm text-gray-600 mt-1">Thesis: ${thesis}</p>` : ''}
            ${defence ? `<p class="text-sm text-gray-600 mt-1">Defence Date: ${defence}</p>` : ''}
            <p class="text-sm text-gray-600 mt-1">Supervisor(s): ${professor.Supervisor || ''}</p>
          </div>
        </div>
      `;
    }

    function loadProfessorCards(containerId, professors) {
      const container = document.getElementById(containerId);
      if (!container) return;
      if (!Array.isArray(professors) || professors.length === 0) {
        container.innerHTML = '<p class="text-center text-gray-500">No entries found.</p>';
        return;
      }
      container.innerHTML = professors.map(generateProfessorCard).join('');
    }
    document.addEventListener('DOMContentLoaded', () => {
      loadProfessorCards("fullTimeContainer", professorData["Institute Research Scholars"] || []);
      loadProfessorCards("projectContainer", professorData["Research Scholars(Ph.D Awarded)"] || []);
    });
  </script>

  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    .professor-image {
      width: 150px;
      height: 150px;
      object-fit: cover;
      object-position: center;
      margin-bottom: 0.75rem;
      border: none;
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
    }
  </style>
</body>

<?php include "../footer.php"; ?>
