import { loop_guard } from 'svelte/internal';
import { writable } from 'svelte/store';
export let items = writable([]);

async function load() {
	const URL = 'http://localhost/Lekcje-Svelte-2021/public/backend/Display.php';
	let res = await fetch(URL, {method: 'GET',});
	res = await res.json();
	items.set(res);
}

load();