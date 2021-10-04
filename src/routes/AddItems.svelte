<script>
	import { items } from '../stores/items';
	import { add } from '../stores/add';
	

	async function addItem(data) {
		const URL = 'http://localhost/Lekcje-Svelte-2021/public/backend/addItem.php';
		let res = await fetch(URL, {
			method: 'POST',
			body: JSON.stringify(data),
		});
	}
</script>

<div class="form">
	<div class="input-wrapper">
		<div class="text">Marka</div><input placeholder="Marka" type="text" name="marka" bind:value={$add.marka}>
	</div>
	<div class="input-wrapper">
		<div class="text">Model</div> <input placeholder="Model" type="text" name="model" bind:value={$add.model}>
	</div>
	<div class="input-wrapper">
		<div class="text">Rocznik</div> <input placeholder="Rocznik" type="text" name="rocznik" bind:value={$add.rocznik}>
	</div>
	<div class="input-wrapper">
		<div class="text">Kolor</div> <input placeholder="Kolor" type="text" name="kolor" bind:value={$add.kolor}>
	</div>
	<div class="input-wrapper">
		<div class="text">Stan</div> <input placeholder="Stan" type="text" name="stan" bind:value={$add.stan}>
	</div>
	<button on:click={() => addItem($add)}>
		Prześlij
	</button>
</div>

<style>

	* {
		box-sizing: border-box;
		margin: 0;
		padding: 0;
	}

	.form {
		display: flex;
		flex-direction: column;
		width: 50vw;
		align-items: center;
		margin: 100px auto 0 auto;
		padding: 30px;
		border: 5px solid orange;
		border-radius: 30px;
	}

	.input-wrapper {
		display: flex;
		justify-content: space-between;
		width: 350px;
		align-items: center;
		margin-top: 25px;
	}

	.text {
		margin-right: 25px;
		font-size: 30px;
	}

	button {
		width: max-content;
		padding: 10px 40px;
		margin-top: 25px;
		background-color: transparent;
		border: 3px solid red;
		border-radius: 20px;
		color: red;
		text-transform: uppercase;
		font-weight: bolder;
		transition: 0.2s;
	}
	button:hover {
		cursor: pointer;
		transform: scale(1.05);
	}

	input[type=text] {
		height: 40px;
		border: 3px solid green;
		border-radius: 10px;
		text-align: center;
		font-weight: bold;
		color: green;
		background: transparent;
	}

	input::placeholder {
		color: white;
		/* font-weight: lighter; */
		opacity: 0.5;
	}

</style>
