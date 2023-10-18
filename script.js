window.onload = () => {
  const toggleButton = document.querySelector(".menu-toggle");
  const navigationWrapper = document.querySelector(
    ".header-navigation-wrapper"
  );

  toggleButton.onclick = () => {
    navigationWrapper.classList.toggle("hidden");
  };

  const repairIdInput = document.querySelector(".repair-id-input");
  const statusCheckForm = document.querySelector(".status-check-form");
  if (statusCheckForm) {
    const params = new Proxy(new URLSearchParams(window.location.search), {
      get: (searchParams, prop) => searchParams.get(prop),
    });
    let code = params.code;
    if (code) {
      displayDeviceStatus(code);
    }

    statusCheckForm.onsubmit = (e) => {
      e.preventDefault();

      const repairId = repairIdInput.value;

      displayDeviceStatus(repairId);
    };
  }
};

const displayDeviceStatus = (code) => {
  // show loading indicator

  // make api call

  const data = {
    model: "Dell Latitude 3510",
    price: "120€",
    statusUpdates: [
      {
        status:
          "Laukiame naujo aušintuvo. Apie 2-3 savaites. Test test test test test test.",
        date: "2023-08-26 11:05",
      },
      {
        status: "Testing",
        date: "2023-09-01 12:01",
      },
    ],
  };

  const container = document.querySelector(".status-check-container");
  container.innerHTML = `
    <div>
      <div class="mb-2">
        <label class="block text-xl font-bold mb-2" for="model-name">Kompiuterio modelis</label>
        <input value="${
          data.model
        }" name="model-name" class="block w-full text-xl rounded-lg border border-solid border-gray-200 focus:outline-yellow-400 bg-transparent hover:cursor-default px-3 md:px-5 py-3 md:py-5 mb-3 md:mb-5" readonly />
      </div>
      <div class="mb-2">
        <label class="block text-xl font-bold mb-2" for="price">Remonto kaina</label>
        <input value="${
          data.price
        }" name="price" class="block w-full text-xl rounded-lg border border-solid border-gray-200 focus:outline-yellow-400 bg-transparent hover:cursor-default px-3 md:px-5 py-3 md:py-5 mb-3 md:mb-5" readonly />
      </div>
      <div>
        <div class="flex justify-between mb-2">
          <label class="text-xl font-bold" for="status">Būsena</label>
        </div>
        ${data.statusUpdates
          .map(
            (statusUpdate) => `
          <div class="flex justify-between mb-2">
            <p class="text-xl text-gray-400">${statusUpdate.date}</p>
          </div>
          <textarea
            name="status"
            class="resize-none block w-full text-xl rounded-lg border border-solid border-gray-200 focus:outline-yellow-400 bg-transparent hover:cursor-default px-3 md:px-5 py-3 md:py-5 mb-3 md:mb-5"
            rows="3"
            readonly
          >${statusUpdate.status}</textarea>
        `
          )
          .join("")}
      </div>
    </div>
  `;
};
