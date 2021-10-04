import { writable } from 'svelte/store';

export const add = writable({
	marka: '',
	model: '',
	rocznik: '',
	kolor: '',
	stan: '',
});
