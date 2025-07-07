document.getElementById("searchInput").addEventListener("input", function () {
  const keyword = this.value.toLowerCase();

  const filteredData = dataTiket.filter(([kereta]) =>
    kereta.toLowerCase().includes(keyword)
  );

  renderTickets(filteredData);
});
