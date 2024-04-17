const { createApp } = Vue;
createApp({
  data() {
    return {
      recordsArray: [],
      isModalShowing: false,
      activeModal: null,
    };
  },

  methods: {
    handleModal(index) {
      this.isModalShowing = true;
      this.activeModal = this.recordsArray[index];
    },
  },

  mounted() {
    axios.get("api.php").then((response) => {
      this.recordsArray = response.data;
      console.log(this.recordsArray);
    });
  },
}).mount("#app");
