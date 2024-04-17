const { createApp } = Vue;
createApp({
  data() {
    return {
      recordsArray: [],
    };
  },

  mounted() {
    axios.get("api.php").then((response) => {
      this.recordsArray = response.data;
      console.log(this.recordsArray);
    });
  },
}).mount("#app");
