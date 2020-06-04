import pandas as pd
import numpy as np
import matplotlib.pyplot as plt
dataset = pd.read_csv("dados_Brazil_GDP_Electricity.csv", index_col=1)

from keras.layers.core import Dense
from keras.layers.recurrent import LSTM
from keras.models import Sequential
from keras.callbacks import EarlyStopping
from sklearn.preprocessing import MinMaxScaler
import math
import os
data = dataset.iloc[:,0].values.reshape(-1, 1)
scaler = MinMaxScaler(feature_range=(0, 1), copy=True)
data = scaler.fit_transform(data)
data.tail()
NUM_TIMESTEPS = 5
max_elements = len(data) - NUM_TIMESTEPS - 1
X = np.zeros((data.shape[0], NUM_TIMESTEPS))
Y = np.zeros((data.shape[0], 1))
for i in range(len(data) - NUM_TIMESTEPS - 1):
    X[i] = data[i:i + NUM_TIMESTEPS].T
    Y[i] = data[i + NUM_TIMESTEPS + 1]

# reshape X to three dimensions (samples, timesteps, features)
X = np.expand_dims(X, axis=2)
#X = X.reshape(X.shape[0], X.shape[1], 1)

X = X[:max_elements]
Y = Y[:max_elements]
sp = int(0.7 * len(data))
Xtrain, Xtest, Ytrain, Ytest = X[0:sp], X[sp:], Y[0:sp], Y[sp:]
# print(Xtrain.shape, Xtest.shape, Ytrain.shape, Ytest.shape)
NUM_EPOCHS = 250
BATCH_SIZE = 5

# np.random.seed(123456)

# stateless
def build_model_stateless():
    model = Sequential()
    model.add(LSTM(10, input_shape=(NUM_TIMESTEPS, 1), return_sequences=False))
    model.add(Dense(1))
    model.compile(loss="mean_squared_error", optimizer="adam", metrics=["mean_squared_error"])
    return model
model_stateless = build_model_stateless()
early_stopping = EarlyStopping(patience=2)
history = model_stateless.fit(Xtrain, Ytrain, epochs=NUM_EPOCHS, batch_size=BATCH_SIZE,
    validation_data=(Xtest, Ytest), shuffle=False, callbacks=[early_stopping], verbose=0)
