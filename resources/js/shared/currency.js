export const DEFAULT_CURRENCY = 'EUR'

export const priceFormat = (price) => {
	return Intl.NumberFormat(
		'eu-EU', 
		{style: 'currency', currency: DEFAULT_CURRENCY}
	).format(price)
}

export const discountFormat = (price, discount) => {
	let updatedPrice = price - (discount / 100) * price
	return Intl.NumberFormat(
		'eu-EU', 
		{style: 'currency', currency: DEFAULT_CURRENCY}
	).format(updatedPrice)
}