import React,{ Component } from 'react';
import ReactDOM from 'react-dom';
import 'bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';

export default class FormNewProducto extends Component {
    constructor(props){
        super(props);
        this.state = {

        }
    }

    Save(){
        console.log("Hola mundo");
    }

    render(){
        return(
            <div className="container">
                <div className="row align-items-center">
                    <div className="col-lg-12">
                        <form className="form-group">
                              <div className="form-group">
                                <label>Nombre</label>
                                <br/>
                                <input onChange={this.Save} name="nombre" type="text" className="from-control" placeholder="Nombre" />
                              </div>
                              <div className="form-group">
                                <label>Descripcion</label>
                                <br/>
                                <input name="descripcion" type="text" className="from-control" placeholder="Nombre" />
                              </div>
                              <div className="form-group">
                                <label>Imagen</label>
                                <br/>
                                <input name="imagen" type="file"  />
                              </div>
                              <button onClick={this.Save} type="submit" className="btn btn-primary">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        );
    }
}


if (document.getElementById('fromNewProducto')) {
    ReactDOM.render(<FormNewProducto />, document.getElementById('fromNewProducto'));
}
