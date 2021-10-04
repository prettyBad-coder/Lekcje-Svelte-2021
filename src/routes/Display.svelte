<script>
	import { items } from '../stores/items';
</script>

<section class="page">
	<table>
		{ #await items then data }
			<tr>
				<td>ID</td>
				<td>MARKA</td>
				<td>MODEL</td>
				<td>ROCZNIK</td>
				<td>KOLOR</td>
				<td>STAN</td>
			</tr>
			{ #each $items as item }
				<tr style="background: { item.kolor }">
					<td> { item.id } </td>
					<td> { item.marka } </td>
					<td> { item.model } </td>
					<td> { item.rocznik } </td>
					<td> { item.kolor } </td>
					<td> { item.stan } </td>
				</tr>
			{ /each }
		{ /await }
	</table>
</section>

<style lang="postcss">
	td {
		@apply px-5 py-2;
	}
</style>