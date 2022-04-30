import Vue from "vue";
import axios from "axios";

import { 
	USER_REQUEST, 
	USER_ERROR, 
	USER_SUCCESS 
} from "../actions/user";
import { AUTH_LOGOUT } from "../actions/auth";

const state = { status: "", profile: {} };

const getters = {
	getProfile: (state) => state.profile,
	isProfileLoaded: (state) => !!state.profile.name,
};

const actions = {
	[USER_REQUEST]: ({ commit, dispatch }) => {
		commit(USER_REQUEST);

		axios({
			url: "/auth/me",
			method: "POST",
		})
			.then((resp) => {
				console.log(resp, 'user');
				commit(USER_SUCCESS, resp);
			})
			.catch(() => {
				commit(USER_ERROR);
				// if resp is unauthorized, logout, to
				dispatch(AUTH_LOGOUT);
			});
	},
};

const mutations = {
	[USER_REQUEST]: (state) => {
		state.status = "loading";
	},
	[USER_SUCCESS]: (state, resp) => {
		state.status = "success";
		Vue.set(state, "profile", resp);
	},
	[USER_ERROR]: (state) => {
		state.status = "error";
	},
	[AUTH_LOGOUT]: (state) => {
		state.profile = {};
	},
};

export default {
	state,
	getters,
	actions,
	mutations,
};
