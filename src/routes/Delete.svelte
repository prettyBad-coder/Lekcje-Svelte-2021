<script>
	import { items } from "../stores/items";

	async function myDelete(data) {
		const URL = 'http://localhost/Lekcje-Svelte-2021/public/backend/Delete.php';
		let res = await fetch(URL, {
			method: 'POST',
			body: JSON.stringify({
				id: data
			}),
		});
		console.log(res);
	}
</script>

<style lang="postcss">
	td {
		@apply px-5 py-2;
	}

	button {
		
	}
		
</style>

<section class="page">
	<div class="form">
		<table>
			{#await items then data}
				<tr>
					<td>ID</td>
					<td>MARKA</td>
					<td>MODEL</td>
					<td>ROCZNIK</td>
					<td>KOLOR</td>
					<td>STAN</td>
				</tr>
				{#each $items as item, index}
					<tr id={ index } style="background: {item.kolor}">
						<td>{item.id}</td>
						<td>{item.marka}</td>
						<td>{item.model}</td>
						<td>{item.rocznik}</td>
						<td>{item.kolor}</td>
						<td>{item.stan}</td>
						<td>
							<button on:click={() => myDelete(item.id)}>
								Delete
							</button>
						</td>
					</tr>
				{/each}
			{/await}
		</table>
	</div>
</section>
