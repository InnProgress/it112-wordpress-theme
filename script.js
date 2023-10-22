window.onload = () => {
  const toggleButton = document.querySelector(".menu-toggle");
  const navigationWrapper = document.querySelector(
    ".header-navigation-wrapper"
  );
  toggleButton.onclick = () => {
    navigationWrapper.classList.toggle("hidden");

    toggleButton
      .querySelectorAll("img")
      .forEach((img) => img.classList.toggle("hidden"));
  };

  const submenuButtons = document.querySelectorAll(".menu-item-has-children");
  submenuButtons.forEach((submenuButton) => {
    submenuButton.onclick = () => {
      const submenu = submenuButton.querySelector("ul");
      if (window.innerWidth > 1024) return (submenu.style.display = "");
      submenu.style.display =
        submenu.style.display === "none" || !submenu.style.display
          ? "block"
          : "none";
    };
  });

  const repairIdInput = document.querySelector(".repair-id-input");
  const statusCheckForm = document.querySelector(".status-check-form");
  if (statusCheckForm) {
    const params = new Proxy(new URLSearchParams(window.location.search), {
      get: (searchParams, prop) => searchParams.get(prop),
    });
    let code = params.code;
    if (code) {
      document.querySelector(".repair-id-input").value = code;
      displayDeviceStatus(code);
    }

    statusCheckForm.onsubmit = (e) => {
      e.preventDefault();

      const repairId = repairIdInput.value;

      displayDeviceStatus(repairId);
    };
  }
};

const displayDeviceStatus = async (code) => {
  // show loading indicator

  const response = await fetch(
    "https://api.it112.lt/api/dashboard/serviceInfo?serviceId=" + code,
    {
      method: "GET",
      headers: {
        "Content-Type": "application/json",
      },
    }
  );

  const container = document.querySelector(".status-check-container");

  const status = await response.json();
  if (status.message) {
    document.querySelector(
      ".error-wrapper"
    ).innerHTML = `<div class="form-message form-message--error mt-6">${status.message}</div>`;
  }

  const data = {
    model: status.service.deviceModel,
    price: status.service.price + "€",
    statusUpdates: status.comments.map((comment) => ({
      status: comment.comment,
      date: new Date(comment.createdAt).toLocaleString("lt-LT"),
    })),
  };

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
