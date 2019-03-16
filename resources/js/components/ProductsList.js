    // resources/assets/js/components/ProjectsList.js

    import axios from 'axios'
    import React, { Component } from 'react'
    import { Link } from 'react-router-dom'

    class ProductsList extends Component {
        constructor() {
            super()
            this.state = {
                products: []
            }
        }

        componentDidMount() {
            axios.get('/api/products').then(response => {
                this.setState({
                    products: response.data
                })
            })
        }

        render() {
            const { products } = this.state
            return ( <div className = 'container py-4' >
                <div className = 'row justify-content-center' >
                <div className = 'col-md-8' >
                <div className = 'card' >
                <div className = 'card-header' > All product </div> <div className = 'card-body' >
                <Link className = 'btn btn-primary btn-sm mb-3' to = '/create' >Add new product </Link> <ul className = 'list-group list-group-flush' > {
                    products.map(product => ( <
                        Link className = 'list-group-item list-group-item-action d-flex justify-content-between align-items-center'
                        to = { `/${product.id}` }
                        key = { product.id } > { product.site_name } <
                        span className = 'badge badge-primary badge-pill' > { product.site_email } </span> < /Link >
                    ))
                } </ul> < /div > </div> < /div > </div> < /div >
            )
        }
    }

    export default ProductsList;