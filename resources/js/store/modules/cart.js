import {
	ADD_ITEM,
	UPDATE_ITEM,
	REMOVE_ITEM,
	CLEAR_ALL
} from "../actions/cart";

const state = {
	StoreCart: [],
};

const getters = {
	StoreCart: state => state.StoreCart,
	getItemCart: (state) => (index) => state.StoreCart[index],
};

const actions = {
	[ADD_ITEM]: ({ commit }, item) => {
		commit(ADD_ITEM, item);
	}, 
	[UPDATE_ITEM]: ({ commit } , data) => {
		commit(UPDATE_ITEM, data);
	},
	[REMOVE_ITEM]: ({ commit }, index) => {
		commit(REMOVE_ITEM, index);
	},
};

const mutations = {
	[ADD_ITEM]: (state, item) => {
		state.StoreCart.push(item);
	},
	[UPDATE_ITEM]: (state, data) => {
		state.StoreCart[data.index].quantity = data.quantity;
	},
	[REMOVE_ITEM]: (state, index) => {
		state.StoreCart.splice(index, 1);
	},
};

export default {
	state,
	getters,
	actions,
	mutations,
};
