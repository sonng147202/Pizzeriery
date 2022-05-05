import store from "../store";

export const isNotAuthenticated = () => {
    if (!store.getters.isAuthenticated) {
        return true;
    }
    return false;
};

export const isAuthenticated = () => {
    if (store.getters.isAuthenticated) {
        return true;
    }
    return false;
};