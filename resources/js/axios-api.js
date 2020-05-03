import axios from "axios";

const instance = axios.create({
    baseURL: "http://dfl-clone.test/api/"
});

export default instance;
