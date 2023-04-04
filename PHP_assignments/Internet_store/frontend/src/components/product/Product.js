function Product({ data }) {
  return (
    <div className="col-4" key={data.id}>
      <img src={data.photo} alt={data.name} />
      <h4>{data.name}</h4>
      <form className="py-2 input-group">
        <input type="number" value="1" className="form-control" />
        <button className="btn btn-primary">Order</button>
      </form>
    </div>
  )
}

export default Product;