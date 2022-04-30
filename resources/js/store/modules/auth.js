import VueRouter from "vue-router";
import axios from "axios";

import {
	AUTH_REQUEST,
	AUTH_ERROR,
	AUTH_SUCCESS,
	AUTH_LOGOUT
} from "../actions/auth";

import { USER_REQUEST } from "../actions/user";

const state = {
	token: localStorage.getItem("user-token") || "",
	status: "",
};

const getters = {
	isAuthenticated: (state) => !!state.token,
	authStatus: (state) => state.status,
};

const actions = {
	[AUTH_REQUEST]: ({ commit, dispatch }, formData) => {

		const data = new FormData();
		data.append('email', formData.email);
		data.append('password', formData.password);

		return new Promise((resolve, reject) => {
			commit(AUTH_REQUEST);
			axios({
				url: "/auth/login",
				data: data,
				method: "POST"
			})
				.then((resp) => {
					console.log(resp, 'login');
					const token = resp.data.token;

					localStorage.setItem("user-token", token);

					axios.defaults.headers.common["Authorization"] = token;

					commit(AUTH_SUCCESS, resp);

					dispatch(USER_REQUEST);

					VueRouter.push({ name: 'Home' });

					resolve(resp);
				})
				.catch((err) => {
					commit(AUTH_ERROR, err);
					localStorage.removeItem("user-token");
					reject(err);
				});
		});
	},
	[AUTH_LOGOUT]: ({ commit, dispatch }) => {

		return new Promise((resolve, reject) => {

			commit(AUTH_LOGOUT);

			localStorage.removeItem("user-token");

			delete axios.defaults.headers.common["Authorization"];

			resolve();
		});
	},
};

const mutations = {
	[AUTH_REQUEST]: (state) => {
		state.status = "loading";
	},
	[AUTH_SUCCESS]: (state, token) => {
		state.status = "success";
		state.token = token;
	},
	[AUTH_ERROR]: (state) => {
		state.status = "error";
	},
};

export default {
	state,
	getters,
	actions,
	mutations
};
